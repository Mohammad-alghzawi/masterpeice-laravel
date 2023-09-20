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
<!-- end search area -->

<!-- home page slider -->
<div class="homepage-slider">
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">FLA7I OFFERS</p>
                            <h1>Online stores for selling agricultural materials with 20% sale</h1>
                            <div class="hero-btns">
                                <a href="about.html" class="boxed-btn">About Us</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">FLA7I OFFERS</p>
                            <h1>All our products have 20% sale</h1>
                            <div class="hero-btns">
                                <a href="about.html" class="boxed-btn">About Us</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end home page slider -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-shipping-fast"></i>

                    </div>
                    <div class="content">
                        <h3>Shipping</h3>
                        <p>shipping with tracking
                            on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3>24 hour Support</h3>
                        <p>Get support all day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-box d-flex justify-content-start align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="content">
                        <h3>Refund</h3>
                        <p>Get refund within 3 days!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Catergories</h3>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="shop.html"><img src="assets/img/materilas hd.webp" alt=""></a>
                    </div>
                    <br><br>

                    <a href="shop.html" class="cart-btn"> Agriculture materials</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="shop.html"><img src="assets/img/slider hd.webp" alt=""></a>
                    </div>
                    <br><br>

                    <a href="shop.html" class="cart-btn"> Agriculture tools</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="shop.html"><img src="assets/img/seed.jpg" alt=""></a>
                    </div>
                    <br><br>

                    <a href="shop.html" class="cart-btn"> Seeds</a>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- end product section -->

<!-- ----------most sellers--------- -->
<div class="row">
    <div class="col-lg-8 offset-lg-2 text-center">
        <div class="section-title">
            <h3><span class="orange-text">Most</span> sellers</h3>

        </div>
    </div>
</div>

<div class="container text-center my-3">

    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4 flexb">
                        <div class="card card-body inlineb">
                            <img class="img-fluid" src="./assets/img/fer3-removebg-preview.png">
                            <p>NPK fertilizer</p>
                            <p> 35 JOD</p>
                            <a href="cart.html"><button class="sellbutton">Add to cart</button></a>
                        </div>
                        <div class="card card-body inlineb">
                            <img class="img-fluid" src="./assets/img/gloves-removebg-preview.png">
                            <p>Agri Gloves</p>
                            <p> 15 JOD</p>
                            <a href="cart.html"><button class="sellbutton">Add to cart</button></a>
                        </div>
                        <div class="card card-body inlineb">
                            <img class="img-fluid" src="./assets/img/image__31_-removebg-preview.png">
                            <p>Nitro fertilizer</p>
                            <p> 50 JOD</p>
                            <a href="cart.html"><button class="sellbutton">Add to cart</button></a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-md-4 flexb">
                        <div class="card card-body inlineb">
                            <img class="img-fluid" src="./assets/img/tol_1-removebg-preview.png"><br>
                            <p>Handle scissors</p>
                            <p> 12 JOD</p>
                            <a href="cart.html"><button class="sellbutton">Add to cart</button></a>
                        </div>
                        <div class="card card-body inlineb">
                            <img class="img-fluid" src="./assets/img/fer_1-removebg-preview.png"><br>
                            <p>Agasol fertilizer</p>
                            <p> 25 JOD</p>
                            <a href="cart.html"><button class="sellbutton">Add to cart</button></a>
                        </div>
                        <div class="card card-body inlineb">
                            <img class="img-fluid" src="./assets/img/tol_3-removebg-preview.png"><br>
                            <p>Water hose</p>
                            <p> 30 JOD</p>
                            <a href="cart.html"><button class="sellbutton">Add to cart</button></a>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                    aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                    aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
<br><br><br><br>

<!-- ---------- end of most sellers--------- -->




<!-- advertisement section -->
<div class="abt-section mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="abt-bg">

                    <a href="https://www.youtube.com/watch?v=mZXetb1TPEg" class="video-play-btn popup-youtube"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="abt-text">

                    <h2>We are <span class="orange-text">FLA7I OFFERS</span></h2>
                    <p>Welcome to our agriculture materials shop! We are your premier source for top-quality farming
                        supplies. From seeds and fertilizers to tools and equipment, we have everything you need to
                        maximize your agricultural productivity. Our knowledgeable team is dedicated to helping you
                        find the right solutions for your specific needs. Visit us today and experience the
                        convenience and reliability of our agricultural materials. Your success is our priority, and
                        we're here to support you every step of the way.</p>
                    <a href="about.html" class="boxed-btn mt-4">know more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end advertisement section -->



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