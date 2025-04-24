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

		<!-- Bootstrap CSS -->
		@include('user/header_link')
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		
		@include('user/header')
		<div class="loader-wrapper">
			<div class="loader"></div>
		  </div>
		<!-- End Header/Navigation -->
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Shop</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    {{-- <div class="container">
		      	<div class="row" style="display: flex; justify-content: center;gap: 30px;">

		      		@foreach ($product as $item)	
					  <div class="col-12 col-md-4 col-lg-3 mb-5">
						  <a class="product-item" href="about/{{ $item->product_id }}" style="  text-align: center;  width: 250px;">
							  <img src="{{ asset('../image').'/'. $item->image }}" alt="{{  $item->image }}" class="img-fluid product-thumbnail" style=" width: 100%; height: auto;border-radius: 7px">
							  <h3 class="product-title">{{ $item->name }}</h3>
							
							  <strong class="product-price">Rs.{{ $item->price }}</strong><span style="color: #ff905a;font-weight: 400; font-size: 13px;margin-left: 6px;">(50% OFF)</span>
							  <span class="icon-cross">
								<i class="fa-solid fa-cart-plus" style="color: white"></i>
								</span>
							</a>
						</div> 
					@endforeach
				

		      	</div>
		    </div> --}}
		</div>


		{{-- ai code --}}
		
		<div class="container">
			<div class="product-row">
			  @foreach ($product as $item)
				<div class="product-card-wrapper">
				  <div class="card product-card">
					<a href="about/{{ $item->product_id }}">
					  <img src="{{ asset('../image').'/'. $item->image }}" class="card-img-top" alt="{{ $item->image }}">
					</a>
					<div class="card-body text-center">
					  <h5 class="card-title product-title">{{ $item->name }}</h5>
		  
					  <div class="price-wrapper">
						<span class="current-price">Rs.{{ $item->price }}</span>
						<span class="original-price">Rs.{{ $item->price * 2 }}</span>
						<span class="discount">50% OFF</span>
					  </div>
		  
					  <div class="rating mb-2">
						⭐⭐⭐⭐☆ (4.0)
					  </div>
{{-- 		  
					  <button class="btn btn-sm add-to-cart">
						<i class="fa-solid fa-cart-plus"></i> Add to Cart
					  </button> --}}
					</div>
				  </div>
				</div>
			  @endforeach
			</div>
		  </div>

		  <style>
			.product-row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 20px;
}

.product-card-wrapper {
  flex: 0 0 calc(22% - 16px); /* 5 items in one row */
  margin-bottom: 30px;
}

.product-card {
  width: 100%;
  border: 1px solid #eee;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  transition: 0.3s;
}

.product-card:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.card-img-top {
  width: 100%;
  height: auto;
  border-bottom: 1px solid #eee;
  border-radius: 10px 10px 0 0;
}

.product-title {
  font-size: 1.1rem;
  font-weight: 600;
  margin-bottom: 10px;
}

.price-wrapper {
  margin-bottom: 8px;
}

.current-price {
  color: #000;
  font-weight: 600;
  font-size: 1rem;
}

.original-price {
  text-decoration: line-through;
  color: #999;
  font-size: 0.9rem;
  margin: 0 8px;
}

.discount {
  color: #ff905a;
  font-weight: 500;
  font-size: 0.85rem;
}

.rating {
  font-size: 0.9rem;
  color: #f5a623;
}

.add-to-cart {
  background-color: #ff905a;
  color: white;
  border: none;
  border-radius: 20px;
  padding: 6px 14px;
  transition: 0.3s;
}

.add-to-cart:hover {
  background-color: #e76e3d;
}

		  </style>
@include('/user/footer_link')
	</body>

</html>
