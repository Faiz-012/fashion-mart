<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    public function shop(){
        $product = DB::table('product table')->get();
        return view('user/shop',compact('product'));
    }
    public function about($id){
        $pro_data = DB::table('product table')->where('product_id',$id)->first();
        return view('user/product',compact('pro_data'));
    } 
    public function home(){
       $product = DB::table('product table')->limit(3)->orderby('product_id','desc')->get();
       return view('user/home',compact('product'));
    }
    public function aboutus(){
        return view('user/aboutus');
    }
    public function Order_item($id){
        $data = DB::table('order_item')
        ->join('checkout','checkout.Checkout_id','=','order_item.Checkout_id')
        ->join('product table','product table.product_id', '=','order_item.product_id')
        ->where('Order_item.Checkout_id',$id)
        ->get();                                                       
      
        // dd($data);
        
        return view('user/Order_item',compact('data'));
    }
    public function order(){
        $user_id = Session::get('user_id');
        $checkout = DB::table('checkout')->where('user_id',$user_id)->get();
        // dd($checkout);
        return view('user/order',compact('checkout'));
    }
    public function login(){
        $user_id = Session::get('user_id');
        $cart = DB::table('cart')
        ->join('product table as ptable','ptable.product_id','cart.product_id')
        ->where('user_id',$user_id)
        ->get();
        return view('user/login',compact('cart'));
    }
    public function checkout(){
        $user_id = Session::get('user_id');
        $cart = DB::table('cart')
        ->join('product table as ptable','ptable.product_id','cart.product_id')
        ->where('user_id',$user_id)
        ->get();
       
        $user = DB::table('user_table')->where('user_id',$user_id)->first();  // for select particuler data and where all data
        // dd($user);
        return view('user/checkout',compact('user','cart'));
         
    }
    public function cart(){

        $user_id = Session::get('user_id');
        $cart = DB::table('cart')
        ->join('product table as ptable','ptable.product_id','cart.product_id')
        ->where('user_id',$user_id)
        ->get();
        return view('user/cart',compact('cart'));
    }
    public function contact(){
        return view('user/contact');
    }
    public function registration(Request $request){
        $name = $request->post('Username');
        $email = $request->post('Email');
        $password = $request->post('Password');
        $phone_number = $request->post('Phonenumber');
        $address = $request->post('Address');
        $data = DB::table('user_table')->insert([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'phone_number' => $phone_number,
            'address' => $address,
        ]);
        
        if($data){
            return redirect('login');
        }
        else{
            return redirect()->back();
        }
        
    }
    public function userlogin(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');

        $data = DB::table('user_table')->where('email',$email)->first();
        // dd($data); 
           if(!empty($data)){
            if($data->password == $password){
                Session::put('user_name',$data->name);
                Session::put('user_id',$data->user_id);
                Session::put('user_email',$data->email);
                Session::put('user_cart','0');
                Session::put('user_phone',$data->phone_number);
                Session::put('user_address',$data->address);
                                // dd(Session::all());
                return redirect('home');
            }else{
                Session::flash('fail','Password is wrong');
                return redirect()->back();
            }
           }
           else{
            Session::flash('fail','Email is wrong');
            return redirect()->back();
           }
    }
    public function logout(){
        Session::flush();
        return redirect('/login');
    }
    public function addcart(Request $request){
        
        $product_id =$request->post('product_id');
        $quantity =$request->post('quantity');
        $user_id = Session('user_id');
        // dd(session('user_id')); 
         
        $data = DB::table('cart')->insert([
            'product_id' => $product_id,
            'quantity' => $quantity,
            'user_id' => $user_id,
        ]);
         
        if($data){
            return redirect()->back()->with('success', 'Product added to cart successfully.');
        }else{
            return redirect()->back()->with('error', 'Failed to add product to cart.');
        }
    }
   
    public function cartremove($id){
    
    // dd($id);
     $data = DB::table('cart')->where('cart_id',$id)->delete();
    return redirect()->back()->with('success', 'Product removed from cart!');
}
    public function addtoquantity($id){
    $quantity = DB::table('cart')->select('quantity')->where('cart_id',$id)->first();
    // dd($quantity);
    // $quantity->quantity += 1;
        $data = DB::table('cart')
        ->where('cart_id',$id)
        ->update([
            'quantity' =>$quantity->quantity + 1, 
        ]);

        if( $data){
            return redirect()->back();
        }
    }
    public function decreasequant($id){
        $quantity = DB::table('cart')->select('quantity')->where('cart_id',$id)->first();
        $data = DB::table('cart')
        ->where('cart_id',$id)
        ->update([
            'quantity' =>$quantity->quantity - 1,
        ]);
        
        if($data){
            return redirect()->back();
        }
    
    }
    public function saveBillingDetails(Request $request){
       dd(Auth::user()); 
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:500',
        ]);
        $user->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
        ]);
        return back()->with('success', 'Billing details updated successfully!');
    }
    
    public function Checkoutinsert(Request $request){
        $user_id = Session('user_id');
        $name = $request->post('name');
        $address = $request->post('address');                                       
        $email = $request->post('email');
        $phone = $request->post('phone_number');
        
        // $user_id = Session::get('user_id');
        $cart = DB::table('cart')->where('user_id',$user_id)->get();     
        if ($cart->isEmpty()) {
            return redirect()->back()->with('error', 'Cart is empty!');
        }
        
        $data_insert= DB::table('checkout')->insertGetId([
            'user_name' => $name,
            'user_address' => $address,
            'email' => $email,
            'phone_number'=> $phone,
            'user_id' => $user_id,
            // 'status' => 0,
        ]);
       
        foreach($cart as $item) { 
            $data[] = [
                // 'order_id' => $data_insert,
                'Checkout_id' => $data_insert,
                'cart_id' =>  $item->cart_id,
                'user_id' => $item->user_id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                // 'status' => 0,
                
            ];
        }
        if($data_insert){
            $insert_order_item = DB::table('order_item')->insert($data);
            if($insert_order_item){
                DB::table('cart')->where('user_id',$user_id)->delete();
            }
            return redirect('order')->with('success', 'Checkoutinsert details updated successfully!');
        }else{
            return redirect()->back()->with('error', 'Failed to Checkoutinsert.');
        }
    }
    public function cancel_order($id){
        $data = DB::table('checkout')->where('Checkout_id',$id)->delete();
        return redirect('order');
}
    
public function status(Request $request, $id){
    $order_item_id = $id;
    $status = $request->get('status');
    // dd($status);
    DB::table('checkout')
    ->where('Checkout_id',$order_item_id)
    ->update([
        'status'=>$status,
    ]);
    
    return redirect()->back()->with('success','Order item status updated!');
}
}