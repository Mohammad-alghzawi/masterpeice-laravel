@extends('layouts.master')
@section('title','cart')
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
<div class="breadcrumb-section-cart breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Cart</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-body-row">
                                <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                <td class="product-image"><img src="./adminDashbard/images/gloves-removebg-preview.png" alt=""></td>
                                <td class="product-name">Agri Gloves</td>
                                <td class="product-price">15 JOD</td>
                                <td class="product-quantity"><input type="number" placeholder="0"></td>
                                <td class="product-total">1</td>
                            </tr>
                            <tr class="table-body-row">
                                <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                <td class="product-image"><img src="./adminDashbard/images/tol_3-removebg-preview.png" alt="image"></td>
                                <td class="product-name">Water hose</td>
                                <td class="product-price">30 JOD</td>
                                <td class="product-quantity"><input type="number" placeholder="0"></td>
                                <td class="product-total">1</td>
                            </tr>
                            <tr class="table-body-row">
                                <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                <td class="product-image"><img src="./adminDashbard/images/fer_1-removebg-preview.png" alt="Image"></td>
                                <td class="product-name">Agasol fertilizer</td>
                                <td class="product-price">25 JOD</td>
                                <td class="product-quantity"><input type="number" placeholder="0"></td>
                                <td class="product-total">1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>Subtotal: </strong></td>
                                <td>75 JOD</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Shipping: </strong></td>
                                <td>25 JOD</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>100 JOD</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                
                        <a href="checkout.html" class="boxed-btn black">Check Out</a>
                    </div>
                </div>

                <div class="coupon-section">
                    <h3>Apply Coupon</h3>
                    <div class="coupon-form-wrap">
                        <form action="index.html">
                            <p><input type="text" placeholder="Coupon"></p>
                            <p><input type="submit" value="Apply"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cart -->
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