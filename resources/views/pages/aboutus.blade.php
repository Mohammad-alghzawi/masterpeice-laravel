@extends('layouts.master')
@section('title', 'AboutUs')
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
    <!-- end header -->

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
    <div class="breadcrumb-section-About breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>We offer a 20% discount on all products on this site </p>
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    



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






    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="sale">


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
                            we're here to support you every step of the way,and Great news for all farmers and cultivators!
                            Our agriculture shop is thrilled to announce an
                            exclusive limited-time offer: a flat 20% discount on all our products. Whether you're in
                            need of seeds, fertilizers, equipment, or tools, now is the ideal moment to make your
                            purchases. This incredible sale is our way of supporting your agricultural journey and
                            helping you achieve remarkable yields. Hurry in and take advantage of this unbeatable deal
                            on everything you need for a successful harvest season!</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->

    <!-- testimonail-section -->
    <div class="testimonail-section mt-80 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        @foreach ($owners as $item)
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ url('/images/' . $item->logo) }}" >
                                </div>
                                <div class="client-meta">
                                    <h3>{{ $item->name }}</h3>
                                    <p class="testimonial-body">
                                        {{ $item->desciption }}
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- end testimonail-section -->

    <!-- logo carousel -->
    {{-- <div class="logo-carousel-section">
    
        <div class="container">
            
            <div class="row">
               
                
                
                <div class="col-lg-12">
                   
                    <div class="logo-carousel-inner">
                        @foreach ($owners as $item ) 
                        <div class="single-logo-item">
                            <img src="{{ url('/images/' . $item->logo) }}" >
                        </div>
                        
    
                        @endforeach
                    </div>
                    
                </div>
                
            </div>
           
        </div>
       
    </div> --}}

@endsection
