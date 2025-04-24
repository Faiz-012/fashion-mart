
<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
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
<style>
	@media (max-width: 768px) {
  .hero h1 {
    font-size: 2rem;
  }

  .hero .intro-excerpt p {
    font-size: 1rem;
    text-align: center;
  }

  .hero-img-wrap {
    text-align: center;
    margin-top: 2rem;
  }

  .product-title, .product-price {
    text-align: center;
  }
}

</style>
		<!-- Bootstrap CSS -->
        @include('user/header_link')
	</head>

	<body>
        @include('user/header')
		<!-- Start Header/Navigation -->
		<div class="loader-wrapper">
			<div class="loader"></div>
		  </div>
		  
		
		
		  

			<!-- //Login form -->

				
		
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								
				{{-- <h1 style="font-size: 3rem;font-weight: 700;text-align: center;color: #ffffff">Stay Stylish with Fashion Mart <span class="d-block" style=" display: block;
    font-size: 2.5rem;
    color: #f1c40f"> The Latest Trends Await!</span></h1> --}}

	<h1 class="text-center text-white fw-bold fs-1">
		Stay Stylish with Fashion Mart
		<span class="d-block text-warning fs-3">The Latest Trends Await!</span>
	  </h1>
	  
								<p class="mb-4 w-100">Fashion Mart is an innovative online clothing store that brings <br> the latest fashion trends to customers with a seamless shopping.</p>

								<p><a href="/shop" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								{{-- <img src="{{ $actual_url. '/web_assets/images/image-Photoroom.png' }}" class="img-fluid" style="    height: 410px;  margin-left: 170px;  margin-top: 70px;  width: 480px;"> --}}
								<img src="{{ $actual_url. '/web_assets/images/image-Photoroom.png' }}" class="img-fluid mx-auto d-block mt-4" style="max-height: 410px; width: 100%; max-width: 480px;">

								{{-- <img src="{{ $actual_url. '/web_assets/images/faiz.webp.png' }}" class="img-fluid" style="    height: 390px;  margin-left: 120px;  margin-top: 95px;  width: 460px; border-radius:14px;"> --}}
								
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="container">
				<div class="product-section">
				<div class="row" >

					
					  <div class="row">  <!-- Main Row Start -->
    
						<!-- Left Content (3 Columns on Large Screens) -->
						<div class="col-md-4 col-lg-3 mb-5 mb-lg-0">
							<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
							<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
							<p><a href="shop.html" class="btn">Explore</a></p>
						</div>
					
						<!-- Right Side (Product Images - 9 Columns on Large Screens) -->
						<div class="col-md-8 col-lg-9">  
							<div class="row" style="justify-content: center; gap:25px;" > <!-- Nested Row for Products -->
								@foreach ($product as $item)    
								{{-- <div class="col-12 col-md-4 col-lg-3 mb-5"> --}}
									<div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">

									<a class="product-item" href="about/{{ $item->product_id }}">
										{{-- <img src="{{ asset('../image').'/'. $item->image }}" alt="{{  $item->image }}" class="img-fluid product-thumbnail"> --}}
										{{-- <img src="{{ asset('../image').'/'. $item->image }}"alt="{{  $item->image }}" class="img-thumbnail"style="height: 250px" width="380px"> --}}
										<img src="{{ asset('../image').'/'. $item->image }}" class="img-thumbnail w-100" style="height: 250px;">

										<h3 class="product-title">{{ $item->name }}</h3>
										<strong class="product-price">{{ $item->price }}</strong>
										
										<span class="icon-cross" style="color: white">
											<i class="fa-regular fa-plus"></i>
										</span>
									</a>
								</div> 
								@endforeach
							</div> <!-- End Nested Row -->
						</div>
					
					</div> <!-- End Main Row -->
					
					
				  
  
					</div>
					<!-- Start Column 4 -->
				
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ $actual_url. '/web_assets/images/truck.svg'}}" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ $actual_url. '/web_assets/images/bag.svg'}}" alt="Image" class="imf-fluid">
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
										<img src="{{ $actual_url. '/web_assets/images/return.svg'}}" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="{{ $actual_url. '/web_assets/images/fashion.jpg'}}" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							
							
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
						<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
						</ul>
						<p><a herf="#" class="btn">Explore</a></p>
					</div>
				</div>
			</div>
		</div>
        @include('/user/footer_link')
	</body>

</html>
