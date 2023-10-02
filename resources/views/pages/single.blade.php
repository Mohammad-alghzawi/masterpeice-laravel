@extends('layouts.master')
@section('title','home')
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
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section-single breadcrumb-bg ">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				@foreach ($productdetails as $item )
				@if (is_object($item))
					
				
				<div class="col-md-5">
					<div class="single-product-img">
						<img style="width: 300px;height:350px" src="{{ url('/images/' . $item->product_image) }}" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3> {{$item->product_name}}</h3>
						<p class="single-product-pricing"><span></span>{{$item->product_price}} JOD</p>
						<p>{{$item->product_description}}</p><br>
						<div class="single-product-form">
							<form action="index.html">
								{{-- <input type="number" placeholder="0"> --}}
								<h5>Remaining amount: <span style="color: orange">{{$item->product_quantity}}</span></h5>
							</form><br><br>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
							
						</div>
					
					</div>
				</div>
				@else
          <p>No product data available.</p>
      @endif
				@endforeach
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($relatedProducts as $item )
					
				
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ url('/images/' . $item->product_image) }}" alt=""></a>
						</div>
						<h3>{{$item->product_name}}</h3>
						<p class="product-price"><span></span> {{$item->product_price}} JOD </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				@endforeach
				{{-- <div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/tol_1-removebg-preview.png" alt=""></a>
						</div>
						<h3>Handle scissors</h3>
						<p class="product-price"><span></span> 12 JOD </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div> --}}
				{{-- <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/fer3-removebg-preview.png" alt=""></a>
						</div>
						<h3>NPK Fertilizer</h3>
						<p class="product-price"><span></span> 35 JOD </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
	<!-- end more products -->

	
	<!-- logo carousel -->
<div class="logo-carousel-section">
    
    <div class="container">
        
        <div class="row">
           
            
            
            <div class="col-lg-12">
               
                <div class="logo-carousel-inner">
                    @foreach ($vendors as $vendor ) 
                    <div class="single-logo-item">
                        <img src="{{ url('/images/' . $vendor->logo) }}" >
                    </div>
                    {{-- <div class="single-logo-item">
                        <img src="assets/img/company-logos/alghzawi-removebg-preview.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/mohammad-removebg-preview.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/the_farm-removebg-preview.png" alt="">
                    </div> --}}

                    @endforeach
                </div>
                
            </div>
            
        </div>
       
    </div>
   
</div>
	<!-- end logo carousel -->
    @endsection