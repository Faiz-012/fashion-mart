<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
//product.blade
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  @include('user/header_link')
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>
		@include('user/header')
		<!-- Start Header/Navigation -->
		
		<div class="loader-wrapper">
			<div class="loader"></div>
		  </div>
		  
		 
		  
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
                        {{-- <div class="col-lg-7">
                            <div class="hero-img-wrap " style="margin-left: 40px">
                                <img src="{{ asset('../image').'/'. $pro_data->image }}" class="img-fluid" style="height: 450px" width="400px">
							</div>
							
						</div> --}}
						<div class="col-12 col-md-6 col-lg-7">
							<div class="hero-img-wrap"> 
								<img 
									src="{{ asset('../image') . '/' . $pro_data->image }}" 
									class="img-fluid" 
									style="height: 450px; width: auto; border-radius: 15px; object-fit: contain; transition: transform 0.3s ease-in-out;" 
									onmouseover="this.style.transform='scale(1.05)'" 
									onmouseout="this.style.transform='scale(1)'"
								>
							</div>
						</div>
						
						
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="intro-excerpt">
                                <h1>{{ $pro_data->name }}</h1>
								<p style="color: #E6E6FA;">{{ $pro_data->Description }}</p>

								<h2 class="text-white mb-4">₹{{ $pro_data->price }}</h2>
								<p><a href="/shop" class="btn btn-secondary me-2">Shop Now</a></p>
								{{-- <form method="post" action="{{ route('addcart') }}">
									@csrf
									<input type="hidden" name="product_id" value="{{ $pro_data->product_id }}">
									<input type="number" name="quantity">
									<input type="submit">
								</form> --}}
								@if(session('user_id'))
								<form method="post" action="{{ route('addcart') }}" class="d-flex align-items-center gap-2">
									@csrf
									<input type="hidden" name="product_id" value="{{ $pro_data->product_id }}">
								
									<div class="input-group" style="width: 150px;">
										<input type="number" name="quantity" min="1" value="1" class="form-control text-center" required>
									</div>
								
									<button type="submit" class="btn btn-dark">Add to Cart</button>
								</form>
								@else
								 <!-- If user is not logged in, show a message or redirect to login -->
    <a href="{{ route('login') }}" class="btn btn-dark">Please login to add to cart</a>
	@endif
                            </div>
                        </div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ $actual_url. '/web_assets/images/truck.svg' }}" alt="Image" class="imf-fluid">
									

									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ $actual_url. '/web_assets/images/bag.svg' }}" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ $actual_url. '/web_assets/images/support.svg'}}" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ $actual_url.'/web_assets/images/return.svg' }}" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="{{ $actual_url.'/web_assets/images/ai.png' }}"  alt="Image" class="img-fluid" style="    height: 600px;
    margin-left: 70px;}">
						</div>
					</div>

				</div>
			</div>
		</div>
	

		

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				

				

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Fashion<span> Mart.</span></a></div>
						<p class="mb-4">Fashion Mart is an innovative online clothing store that brings
							the latest fashion trends to customers with a seamless shopping.	
							</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

			

			</div>
		</footer>
		<!-- End Footer Section -->	


		@include('/user/footer_link')
	</body>

</html>
