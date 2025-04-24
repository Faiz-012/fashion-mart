<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
// use App\Http\Controllers\Admin;
use App\Http\Controllers\User;
use App\Http\Controllers\CartController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',[Admin::class,'index'])->name('dashboard');
// Route::get('/welcome',[WelcomeController::class,'controller_function']);
// Route::get('/second',[WelcomeController::class,'secondpage']);
// Route::get('categoryview',[Admin::class,'category_view'])->name('categoryview');

// Route::get('subcategoryview',[Admin::class,'subcategory_view'])->name('subcategoryview');
// Route::get('productview',[Admin::class,'product_view'])->name('productview');
// Route::get('orderview',[Admin::class,'order_view'])->name('orderview');
// Route::get('/orderviewitem/{id}',[Admin::class,'orderviewitem'])->name('orderviewitem');
// Route::get('paymentview',[Admin::class,'payment_view'])->name('paymentview');
// Route::get('loginview',[Admin::class,'login_view'])->name('loginview');
// Route::get('registerview',[Admin::class,'register_view'])->name('registerview');
// Route::post('registraionprocess',[Admin::class,'registraionprocess'])->name('registraionprocess');
// Route::post('loginprocess',[Admin::class,'loginprocess'])->name('loginprocess'); 
// Route::post('CategoryProcess',[Admin::class,'CategoryProcess'])->name('CategoryProcess');
// Route::post('subcatoryProcess',[Admin::class,'subcatoryProcess'])->name('subcatoryProcess');
// Route::post('ProductProcess',[Admin::class,'ProductProcess'])->name('ProductProcess');

// Route::get('deletecategory/{id}',[Admin::class,'deletecategory'])->name('deletecategory');
// Route::get('DeleteSub/{id}',[Admin::class,'DeleteSub'])->name('DeleteSub');
// Route::get('DeleteProduct/{id}',[Admin::class,'DeleteProduct'])->name('DeleteProduct');
// Route::get('editcategory/{id}',[Admin::class,'editcategory'])->name('editcategory');
// Route::post('updatecategory',[Admin::class,'updatecategory'])->name('updatecategory');

// Route::get('editsub/{id}',[Admin::class,'editsub'])->name('editsub');
// Route::post('updateSub',[Admin::class,'updateSub'])->name('updateSub');

// Route::get('editpro/{id}',[Admin::class,'editpro'])->name('editpro');
// Route::post('updatepro',[Admin::class,'updatepro'])->name('updatepro');
// Route::get('/deliverystatus/{id}',[Admin::class,'update_status'])->name('deliverystatus');


// User site
Route::get('/', function () {
    return redirect()->route('home');  //* if you comment out this code so user side open else admin *//
});

Route::get('shop',[User::class,'shop'])->name('shop');
Route::get('about/{id}',[User::class,'about'])->name('about');
Route::get('home',[User::class,'home'])->name('home');
Route::get('aboutus',[User::class,'aboutus'])->name('aboutus');
Route::get('login',[User::class,'login'])->name('login');
Route::get('contact',[User::class,'contact'])->name('contact');


// userlogin
Route::post('userlogin',[User::class,'userlogin'])->name('userlogin');

Route::post('registration',[User::class,'registration'])->name('registration');

Route::get('logout',[User::class,'logout'])->name('logout');
Route::post('addcart',[User::class,'addcart'])->name('addcart');
Route::get('cart',[User::class,'cart'])->name('cart');
Route::get('/cartremove/{id}',[User::class,'cartremove'])->name('cartremove');
Route::get('/addtoquantity/{id}',[User::class,'addtoquantity'])->name('addtoquantity');
Route::get('/decreasequant/{id}',[User::class,'decreasequant'])->name('decreasequant');
Route::get('checkout',[User::class,'checkout'])->name('checkout');

Route::middleware(['auth'])->group(function(){
     Route::post('/save-billing-details', [User::class, 'saveBillingDetails'])
         ->name('saveBillingDetails');
 });

Route::post('Checkoutinsert',[User::class,'Checkoutinsert'])->name('Checkoutinsert');

// Route::post('Order_item',[User::class,'Order_item'])->name('Order_item');
 
Route::get('order',[User::class,'order'])->name('order');

Route::get('/Order_item/{id}',[User::class,'Order_item'])->name('Order_item');
Route::get('/cancel_order/{id}',[User::class,'cancel_order'])->name('cancel_order');
Route::get('/userstatus/{id}',[Admin::class,'status'])->name('status');

