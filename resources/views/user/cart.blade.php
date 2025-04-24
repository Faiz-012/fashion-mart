
{{-- //cart page --}}
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <style>
    /* Make table scrollable on small screens */
@media (max-width: 600px) {
  .site-blocks-table {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  .site-blocks-table table {
    min-width: 700px;
  }

  .quantity-container {
    flex-direction: row !important;
    justify-content: center;
  }

  .hero .intro-excerpt {
    text-align: center;
  }

  .btn-block {
    width: 100%;
  }

  .pl-5 {
    padding-left: 1rem !important;
  }

  .text-right {
    text-align: right !important;
  }

  .table td,
  .table th {
    white-space: nowrap;
    vertical-align: middle;
  }

  /* Stack the two main columns in the last row */
  .before-footer-section .row:last-child > .col-md-6 {
    padding-left: 0 !important;
    margin-bottom: 2rem;
  }
}

  </style>
		<!-- Bootstrap CSS -->
        @include('user/header_link')
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		
		@include('user/header')
		<div class="loader-wrapper">
			<div class="loader"></div>
		  </div>
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Cart</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>

						@php $subtotal = 0; @endphp
						@foreach ($cart as $item )
						@php
							$itemTotal = $item->price * $item->quantity;
							$subtotal += $itemTotal
						@endphp
						
                        <tr>
                          <td class="product-thumbnail">
                            <img src="{{ asset('../image').'/'. $item->image }}" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">{{ $item->name }}</h2>
                          </td>
                          <td>{{ $item->price }}</td>
                          <td>
							
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <a  href="decreasequant/{{ $item->cart_id }}" class="btn btn-outline-black decrease {{ $item->quantity == 1 ? "disabled" : '' }}" type="button">&minus;</a>
                              </div>	
                              <input type="text" class="form-control text-center quantity-amount" value="{{ $item->quantity }}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <a href="addtoquantity/{{ $item->cart_id }}" class="btn btn-outline-black increase" type="button">&plus;</a>
                              </div>
                            </div>
        
                          </td>
                          <td>{{ $item->price * $item->quantity }}</td>

                          <td>
							<a href="cartremove/{{ $item->cart_id }}" class="btn btn-black btn-sm"><span><i class="fa-solid fa-trash"></i></span></a></td>
							
                        </tr>
						@endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-black btn-sm btn-block">Update Cart</button>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Coupon</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Apply Coupon</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">{{ $subtotal }}</strong>
                        </div>
                      </div>
                      
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" style="margin-top: 40px" onclick="window.location='/checkout'">Proceed To Checkout</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		

		
		@include('/user/footer_link')
		
	</body>

</html>
