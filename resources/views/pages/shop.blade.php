@extends('layouts.master')
@section('title','shop')
@section('content')
		
        <!-- search area -->
		<div class="search-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<span class="close-btn"><i class="fas fa-window-close"></i></span>
						<div class="search-bar">
							<div class="search-bar-tablecell">
								<h3>Search For:</h3>
								<input type="text" placeholder="Keywords">
								<button type="submit">Search <i class="fas fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end search area -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section-shop breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".materials">Agriculture materials</li>
                            <li data-filter=".tools">Agriculture tools</li>
                            <li data-filter=".Seeds">Seeds</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				<div class="col-lg-4 col-md-6 text-center tools ">
					<div class="single-product-item ">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/gloves-removebg-preview.png" alt=""></a>
						</div>
						<h3>Agri gloves</h3>
						<p class="product-price"> 15 JOD </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
                            
				<div class="col-lg-4 col-md-6 text-center tools ">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/tol_1-removebg-preview.png" alt=""></a>
						</div>
						<h3>Handle scissors</h3>
						<p class="product-price"> 12 JOD </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center materials">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/fer3-removebg-preview.png" alt=""></a>
						</div>
						<h3>Fertilizer</h3>
						<p class="product-price"> 35 JOD </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center materials">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/image__31_-removebg-preview.png" alt=""></a>
						</div>
						<h3>Fertilizer</h3>
						<p class="product-price"> 50 JOD</p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center materials">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/fer_1-removebg-preview.png" alt=""></a>
						</div>
						<h3>Fertilizer</h3>
						<p class="product-price"> 25 JOD </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center tools">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/tol_3-removebg-preview.png" alt=""></a>
						</div>
						<h3>Water hose</h3>
						<p class="product-price"> 30 JOD </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->

<!-- logo carousel -->
<div class="logo-carousel-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="logo-carousel-inner">
					<div class="single-logo-item">
						<img src="assets/img/company-logos/hamad-removebg-preview.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/alghzawi-removebg-preview.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/mohammad-removebg-preview.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/the_farm-removebg-preview.png" alt="">
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
<!-- end logo carousel -->
@endsection