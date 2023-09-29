<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon icon -->
    <link rel="shortcut icon" href={{ asset('assets/images/icons/favicon.ico') }} type="image/x-icon">

    <!-- Include fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Include google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Include bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }}>

    <!-- Include aos CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/aos.css') }}>

    <!-- Include magnific-popup CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/magnific-popup.css') }}>

    <!-- Include nice-select CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/nice-select.css') }}>

    <!-- Include slick-theme CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/slick-theme.css') }}>

    <!-- Include slick CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/slick.css') }}>

    <!-- Include stylesheet CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}>






</head>

<body>
    <!-- body wrap start -->
    <div class="body-wrap overflow-hidden">
        <!-- back-to-top start -->
        <div class="backtotop">
            <a href="#!" class="scroll">
                <i class="fas fa-arrow-up fw-bold"></i>
            </a>
        </div>
        <!-- back-to-top end -->

        {{-- <!-- header section start -->
        <header class="header_section header_1">
         

            <!-- bottom header start -->
            <div class="header_bottom_main header_border">
                <div class="container">
                    <!-- web menubar start-->
                    <div class="webMenu d-none d-lg-block position-relative">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand position-relative" href="index.html"><img
                                    src="{{asset('assets/img/sereen-removebg-preview.png')}}" style="width:25%" alt="image_not_found"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav main_menu_list m-auto after_navbar">
                                    <li class="nav-item nav_item_has_child px-2 dropdown">
                                        <a class="nav-link active" aria-current="page" href="#" id="home_submenu"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                        <div class="nav_item_submenu dropdown-menu" aria-labelledby="home_submenu"
                                            style="background-image: url(assets/images/mega/mega3.png)">
                                            <div class="nav_submenu_cont">
                                                <h4>All Home Pages</h4>
                                                <ul class="list-unstyled ms-3">
                                                    <li>
                                                        <a href="index.html">Home V.1</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-2.html">Home V.2</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-3.html">Home V.3</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.html">Home V.4</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Home V.5</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Home V.6</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav_item_has_child px-2 dropdown">
                                        <a class="nav-link" href="#" id="shop_submenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                        <div class="nav_item_submenu dropdown-menu" aria-labelledby="shop_submenu"
                                            style="background-image: url(assets/images/mega/mega3.png)">
                                            <div class="nav_submenu_cont">
                                                <h4>All Shop Pages</h4>
                                                <ul class="list-unstyled ms-3">
                                                    <li>
                                                        <a href="shop-list-sidebar.html">
                                                            <span class="item_title text-start">Shop Sidebar</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list.html">
                                                            <span class="item_title text-start">Shop List</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="item_title text-start">Shop List 3</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="item_title text-start">Shop List 4</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="item_title text-start">Shop List 5</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="item_title text-start">Shop List 6</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav_item_has_child px-2 dropdown">
                                        <a class="nav-link" href="#" id="blog_submenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                        <div class="nav_item_submenu dropdown-menu" aria-labelledby="blog_submenu"
                                            style="background-image: url(assets/images/mega/mega3.png)">
                                            <div class="nav_submenu_cont">
                                                <h4>All Blog Pages</h4>
                                                <ul class="list-unstyled ms-3">
                                                    <li>
                                                        <a href="blog-details.html">Blog Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-grid.html">Blog Grid</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list.html">Blog List 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blog List 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blog List 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blog List 4</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav_item_has_child px-2">
                                        <a class="nav-link" href="#!">Portfolio</a>
                                    </li>
                                    <li class="nav-item nav_item_has_child px-2 dropdown">
                                        <a class="nav-link" href="#" id="page_submenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                        <div class="nav_item_megamenu dropdown-menu" aria-labelledby="page_submenu">
                                            <div class="container p-0">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mega_thumb_area position-relative"
                                                            style="background-image: url(assets/images/sales/sale1.png);">
                                                            <div class="thumb_text">
                                                                <h2>
                                                                    <font>100%</font> Pure <br> Natural Vegetable
                                                                </h2>
                                                                <span>Fresh Vegetables Sale 30% Off</span>
                                                                <a href="#"><button type="button"
                                                                        class="btn custom_btn rounded-pill text-white mt-3">View
                                                                        More</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mega_item_area ms-5 my-4 position-relative">
                                                            <h4>All Inner Page</h4>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="cart.html">Cart Page</a>
                                                                </li>
                                                                <li>
                                                                    <a href="faqs.html">Faqs Page</a>
                                                                </li>
                                                                <li>
                                                                    <a href="about-us.html">About Us V.1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="about-us-2.html">About Us V.2</a>
                                                                </li>
                                                                <li>
                                                                    <a href="checkout.html">Checkout Page</a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html">Compare Page</a>
                                                                </li>
                                                            </ul>
                                                            <div class="mega_item_thumb1 position-absolute">
                                                                <img src="assets/images/mega/mega1.png"
                                                                    alt="image_not_found">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mega_item_area my-4 position-relative">
                                                            <h4>All Inner Page </h4>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="vendor.html">
                                                                        <span class="item_title text-start">Vendor
                                                                            Page</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="vendor-profile.html">
                                                                        <span class="item_title text-start">Vendor
                                                                            Profile</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="vendor-dashboard.html">
                                                                        <span class="item_title text-start">Vendor
                                                                            Dashboard</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="product-detail.html">
                                                                        <span class="item_title text-start">Product
                                                                            Details V.1</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="product-detail-2.html">
                                                                        <span class="item_title text-start">Product
                                                                            Details V.2</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="mega_item_thumb2 position-absolute">
                                                                <img src="assets/images/mega/mega2.png"
                                                                    alt="image_not_found">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav_item_has_child dropdown px-2">
                                        <a class="nav-link" href="#" id="contact_submenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
                                        <div class="nav_item_submenu dropdown-menu" aria-labelledby="contact_submenu"
                                            style="background-image: url(assets/images/mega/mega3.png)">
                                            <div class="nav_submenu_cont">
                                                <h4>All Contact Pages</h4>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="contact-us.html">Contact Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact Us-2</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact Us-3</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact Us-4</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="navbar_user me-2">
                                <div class="navbar_user_icon">
                                    <ul class="list-unstyled d-flex mb-0">
                                        <li class="pe-3">
                                            <button class="main_search_btn" data-bs-toggle="collapse"
                                                data-bs-target="#main_search_collapse" aria-expanded="false"
                                                aria-controls="main_search_collapse">
                                                <i class="search_icon fas fa-search"></i>
                                                <i class="search_close fas fa-times"></i>
                                            </button>
                                        </li>
                                        <li class="pe-2 position-relative">
                                            <a href="#collapseExample" data-bs-toggle="collapse"
                                                href="#collapseExample" role="button" aria-expanded="false"
                                                aria-controls="collapseExample"><i class="far fa-user"
                                                    data-toggle="collapse" role="button"
                                                    data-target="#use_deropdown" aria-expanded="false"
                                                    aria-controls="use_deropdown"></i>
                                            </a>
                                            <!-- user profile start -->
                                            <div id="collapseExample" class="collapse_dropdown collapse">
                                                <div class="dropdown_content">
                                                    <div class="profile_info clearfix">
                                                        <div class="user_thumbnail">
                                                            <img src="assets/images/meta/meta1.png"
                                                                alt="image_not_found">
                                                        </div>
                                                        <div class="user_content">
                                                            <h4 class="user_name">Jone Doe</h4>
                                                            <span class="user_title">Seller</span>
                                                        </div>
                                                    </div>
                                                    <ul class="settings_options ul_li_block clearfix">
                                                        <li><a href="#!"><i class="fas fa-user-circle"></i>
                                                                Profile</a></li>
                                                        <li><a href="#!"><i class="fas fa-user-cog"></i>
                                                                Settings</a></li>
                                                        <li><a href="#!"><i class="fas fa-sign-out-alt"></i>
                                                                Logout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pe-2"><a href="#!"><i class="far fa-heart"></i></a></li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-shopping-bag position-relative"
                                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                    aria-controls="offcanvasRight"><span
                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- webmenu bottom shape -->
                    </div>
                    <!-- mobile menubar start -->
                    <div class="mobileMenu d-block d-lg-none">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo.png"
                                    alt="image_not_found"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false"
                                tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                <div class="offcanvas-header">
                                    <button type="button" class="btn-close mobile_menu_close text-reset"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item pe-4 dropdown">
                                            <a class="nav-link active" aria-current="page" href="#"
                                                id="home_submenu" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Home</a>
                                            <div class="dropdown-menu" aria-labelledby="home_submenu">
                                                <div class="sidebar_nav_item">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="index.html">Home V.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="index-2.html">Home V.2</a>
                                                        </li>
                                                        <li>
                                                            <a href="index-3.html">Home V.3</a>
                                                        </li>
                                                        <li>
                                                            <a href="index-4.html">Home V.4</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item pe-4 dropdown">
                                            <a class="nav-link" href="#" id="shop_submenu" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                            <div class="dropdown-menu" aria-labelledby="shop_submenu">
                                                <div class="sidebar_nav_item">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="shop-list-sidebar.html">Shop Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">Shop List</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item pe-4 dropdown">
                                            <a class="nav-link" href="#" id="blog_submenu" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                            <div class="dropdown-menu" aria-labelledby="blog_submenu">
                                                <div class="sidebar_nav_item">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="blog-details.html">Blog Details</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-grid.html">Blog Grid</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-list.html">Blog List</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item pe-5">
                                            <a class="nav-link" href="#!">Portfolio</a>
                                        </li>
                                        <li class="nav-item pe-4 dropdown">
                                            <a class="nav-link" href="#" id="page_submenu" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="page_submenu">
                                                <div class="sidebar_nav_item">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="cart.html">Cart Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="faqs.html">Faqs Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="about-us.html">About Us V.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="about-us-2.html">About Us V.2</a>
                                                        </li>
                                                        <li>
                                                            <a href="vendor.html">Vendor Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="vendor-profile.html">Vendor Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="vendor-dashboard.html">Vendor Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-detail.html">Product Details V.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-detail-2.html">Product Details V.2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item pe-4 dropdown">
                                            <a class="nav-link" href="#" id="contact_submenu" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
                                            <div class="dropdown-menu" aria-labelledby="contact_submenu">
                                                <div class="sidebar_nav_item">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="contact-us.html">Contact Us</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="navbar_user me-2">
                                <div class="navbar_user_icon">
                                    <ul class="list-unstyled d-flex mb-0">
                                        <li class="pe-3">
                                            <button class="main_search_btn" data-bs-toggle="collapse"
                                                data-bs-target="#main_search_collapse" aria-expanded="false"
                                                aria-controls="main_search_collapse">
                                                <i class="search_icon fas fa-search"></i>
                                                <i class="search_close fas fa-times"></i>
                                            </button>
                                        </li>
                                        <li class="pe-2 position-relative">
                                            <a href="#collapseExample" data-bs-toggle="collapse"
                                                href="#collapseExample" role="button" aria-expanded="false"
                                                aria-controls="collapseExample"><i class="far fa-user"
                                                    data-toggle="collapse" role="button"
                                                    data-target="#use_deropdown" aria-expanded="false"
                                                    aria-controls="use_deropdown"></i>
                                            </a>
                                            <!-- user profile start -->
                                            <div id="collapseExample" class="collapse_dropdown collapse">
                                                <div class="dropdown_content">
                                                    <div class="profile_info clearfix">
                                                        <div class="user_thumbnail">
                                                            <img src="assets/images/meta/meta1.png"
                                                                alt="image_not_found">
                                                        </div>
                                                        <div class="user_content">
                                                            <h4 class="user_name">Jone Doe</h4>
                                                            <span class="user_title">Seller</span>
                                                        </div>
                                                    </div>
                                                    <ul class="settings_options ul_li_block clearfix">
                                                        <li><a href="#!"><i class="fas fa-user-circle"></i>
                                                                Profile</a></li>
                                                        <li><a href="#!"><i class="fas fa-user-cog"></i>
                                                                Settings</a></li>
                                                        <li><a href="#!"><i class="fas fa-sign-out-alt"></i>
                                                                Logout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pe-2"><a href="#!"><i class="far fa-heart"></i></a></li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-shopping-bag position-relative"
                                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                    aria-controls="offcanvasRight"><span
                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- collapse search - start -->
                <div class="main_search_collapse collapse" id="main_search_collapse">
                    <div class="main_search_form position-relative card">
                        <div class="container">
                            <form action="#">
                                <div class="form_item position-relative">
                                    <input type="search" class="form-control rounded-pill py-3" name="search"
                                        placeholder="Search Your Product...">
                                    <button type="submit" class="submit_btn"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- collapse search - end -->
            </div>
        </header> --}}

        <!-- main body start -->
        <main>
            <!-- sidebar section start -->
            <section class="sidebar_section">
                <div class="sidebar_content_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header align-items-center">
                                    <h5 class="mb-0">Organic Products</h5>
                                    <button type="button" class="btn-close text-reset text-end"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                        <div
                                            class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                            <img src={{ asset('assets/images/category/cat6.png') }}
                                                alt="image_not_found">
                                        </div>
                                        <div class="prdc_ctg_product_text">
                                            <div class="prdc_ctg_product_title my-2">
                                                <h5>Organic Cabbage</h5>
                                            </div>
                                            <div class="prdc_ctg_product_price mt-1 product_price">
                                                <span class="sale_price pe-1">$50.00</span>
                                                <del>$70.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                        <div
                                            class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                            <img src={{ asset('assets/images/category/cat7.png') }}
                                                alt="image_not_found">
                                        </div>
                                        <div class="prdc_ctg_product_text">
                                            <div class="prdc_ctg_product_title my-2">
                                                <h5>Organic Cabbage</h5>
                                            </div>
                                            <div class="prdc_ctg_product_price mt-1 product_price">
                                                <span class="sale_price pe-1">$40.00</span>
                                                <del>$60.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                        <div
                                            class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                            <img src={{ asset('assets/images/category/cat8.png') }}
                                                alt="image_not_found">
                                        </div>
                                        <div class="prdc_ctg_product_text">
                                            <div class="prdc_ctg_product_title my-2">
                                                <h5>Organic Cabbage</h5>
                                            </div>
                                            <div class="prdc_ctg_product_price mt-1 product_price">
                                                <span class="sale_price pe-1">$70.00</span>
                                                <del>$90.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total_price">
                                        <ul class="ul_li_block mb_30 clearfix">
                                            <li>
                                                <span>Subtotal:</span>
                                                <span>$215</span>
                                            </li>
                                            <li>
                                                <span>Vat 5%:</span>
                                                <span>$10.75</span>
                                            </li>
                                            <li>
                                                <span>Discount 15%:</span>
                                                <span>- $32.25</span>
                                            </li>
                                            <li>
                                                <span>Total:</span>
                                                <span>$191.8875</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sidebar_btns">
                                        <ul class="btns_group ul_li_block clearfix">
                                            <li><a href="cart.html">View Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sidebar section end -->

            <!-- Breadcrumb section start -->
            <section class="breadcrumb_sec_1 position-relative">
                <div class="breadcrumb_wrap sec_space_mid_small"
                    style="background-image: url('{{ asset('assets/images/breadcrumb/breadcrumb1.png') }}');">
                    <div class="breadcrumb_cont text-center">
                        <div class="breadcrumb_title">
                            <h2 class="text-white text-uppercase">Dashboard</h2>
                        </div>
                        <ul
                            class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                            <li><a href="index.html"><i class="fas fa-home active"></i>Home</a></li>
                            <li><i class="fas fa-chevron-right"></i>Vendor Dashboard</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb section end -->

            <!-- vendor_dashboard_section - start
                  ================================================== -->
            <section class="vendor_dashboard_section bg_gray" data-aos="fade-up" data-aos-duration="2000">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="vd_tab_area">
                                
                                <div class="vd_space">
                                    <div class="vd_info_wrap text-center">
                                        <div class="vd_image">
                                            <div class="image_wrap">
                                                <img src={{ asset('assets/images/meta/meta1.png') }}
                                                    alt="image_not_found">
                                            </div>
                                           
                                        </div>
                                        <h2 class="vd_mane">Vicent George</h2>
                                        <span class="vd_mail"><a href="#!">vicentgeorg@gmail.com</a></span>
                                      
                                    </div>
                                </div>

                                <ul class="vd_tab_nav nav ul_li_block" role="tablist">
                                    <li>
                                        <button class="{{ request()->is('dash*') ? 'active' : '' }}" >
                                            <a href="{{route('dash.index')}}" style="color: rgb(25, 24, 24) ;">Dashboard</a>
                                        </button>
                                    </li>
                                    {{-- <li>
                                        <button data-bs-toggle="tab" data-bs-target="#tab_products" type="button"
                                            role="tab" aria-selected="false">
                                            Products
                                        </button>
                                    </li> --}}

                                    <li>
                                        {{-- <button data-bs-toggle="tab" data-bs-target="#tab_categories" type="button"
                                            role="tab" aria-selected="false">
                                            categories
                                        </button> --}}
                                        <button class="{{ request()->is('category*') ? 'active' : '' }}" >
                                            <a href="{{route('category.index')}}"style="color: rgb(25, 24, 24) ;">Category</a>
                                        </button>
                                        
                                    </li>
                                    <li>
                                        {{-- <button data-bs-toggle="tab" data-bs-target="#tab_orders" type="button"
                                            role="tab" aria-selected="false">
                                            Orders
                                        </button> --}}
                                        <button class="{{ request()->is('product*') ? 'active' : '' }}" >
                                            <a href="{{route('product.index')}}"style="color: rgb(25, 24, 24) ;">Product</a>
                                        </button>
                                        
                                    </li>
                                    <li>
                                        <button class="{{ request()->is('users*') ? 'active' : '' }}" >
                                            <a href="{{route('users.index')}}"style="color: rgb(25, 24, 24) ;">User</a>
                                        </button>
                                      
                                    </li>
                                    <li>
                                        <button class="{{ request()->is('admin*') ? 'active' : '' }}" >
                                            <a href="{{route('admin.index')}}"style="color: rgb(25, 24, 24) ;">Admin</a>
                                        </button>
                                       
                                    </li>

                                    <li>
                                        {{-- <button data-bs-toggle="tab" data-bs-target="#tab_profile" type="button"
                                            role="tab" aria-selected="false">
                                            Profile
                                        </button> --}}
                                        <button class="{{ request()->is('profileAdmin*') ? 'active' : '' }}" >
                                            <a href="{{route('profileAdmin.index')}}"style="color: rgb(25, 24, 24) ;">Profile</a>
                                        </button>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>

                               
                            </div>
                        </div>




                        
                        <div class="col col-lg-9">
                            <div class="tab-content">


                                @yield('content')





                            </div>
                        </div>
                        <!-- Include jquery js -->
                        <script src={{ asset('assets/js/jquery.min.js') }}></script>

                        <!-- Include bootstrap-bundle js -->
                        <script src={{ asset('assets/js/bootstrap.bundle.min.js') }}></script>

                        <!-- Include aos js -->
                        <script src={{ asset('assets/js/aos.js') }}></script>

                        <!-- Include chart js -->
                        <script src={{ asset('assets/js/chart.js') }}></script>

                        <!-- Include jquery-magnific-popup js -->
                        <script src={{ asset('assets/js/magnific-popup.min.js') }}></script>

                        <!-- Include nice-select js -->
                        <script src={{ asset('assets/js/nice-select.min.js') }}></script>

                        <!-- Include jquery-countdown js -->
                        <script src={{ asset('assets/js/countdown.min.js') }}></script>

                        <!-- Include slick js -->
                        <script src={{ asset('assets/js/slick.min.js') }}></script>

                        <!-- Include custom js -->
                        <script src={{ asset('assets/js/custom.js') }}></script>

</body>

</html>
