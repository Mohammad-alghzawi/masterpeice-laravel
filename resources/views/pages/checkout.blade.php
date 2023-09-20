@extends('layouts.master')
@section('title','checkout')
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
	<div class="breadcrumb-section-check breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">

						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
							<div class="card single-accordion">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse"
											data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Billing Address
										</button>
									</h5>
								</div>
							
								

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
									data-parent="#accordionExample">
									<div class="card-body">
										<div class="billing-address-form">
											<form action="index.html">
												<p><input type="text" placeholder="Name"></p>
												<p><input type="email" placeholder="Email"></p>
												<p><input type="text" placeholder="Address"></p>
												<p><input type="tel" placeholder="Phone"></p>
											</form>
										</div>
									</div>
								</div>
							</div>
							

							<div class="card single-accordion card">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
											data-target="#collapseThree" aria-expanded="false"
											aria-controls="collapseThree">
											Card Details
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
									data-parent="#accordionExample">
									<div class="card-body">
										<div class="card-details-form">
											<div class="container p-0">
												<div class="card px-4">
													<p class="h8 py-3">Visa</p>
													<div class="row gx-3">
														<div class="col-12">
															<div class="d-flex flex-column">
																<p class="text mb-1">Person Name</p>
																<input class="form-control mb-3" type="text"
																	placeholder="Name">
															</div>
														</div>
														<div class="col-12">
															<div class="d-flex flex-column">
																<p class="text mb-1">Card Number</p>
																<input class="form-control mb-3" type="text"
																	placeholder="Number">
															</div>
														</div>
														<div class="col-6">
															<div class="d-flex flex-column">
																<p class="text mb-1">Expiry</p>
																<input class="form-control mb-3" type="text"
																	placeholder="MM/YYYY">
															</div>
														</div>
														<div class="col-6">
															<div class="d-flex flex-column">
																<p class="text mb-1">CVV/CVC</p>
																<input class="form-control mb-3 pt-2 " type="password"
																	placeholder="***">
															</div>
														</div>
														
														
													</div>
													
												</div>

											</div><br>
														
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
					
					</div>
				
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>
								<tr>
									<td>Agri Gloves</td>
									<td>15 JOD</td>
								</tr>
								<tr>
									<td>NPK fertilizer</td>
									<td>35 JOD</td>
								</tr>
								<tr>
									<td>Agasol fertilizer</td>
									<td>25 JOD</td>
								</tr>
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td>75 JOD</td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td>25 JOD</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>100 JOD</td>
								</tr>
							</tbody>
						</table><br>
					
						<div>
															
							<p style="font-weight: bold;"><input type="checkbox"> Cash on Delivery</p>	<br>
							<a href="#" class="boxed-btn">Place Order</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

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