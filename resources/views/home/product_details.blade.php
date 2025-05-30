<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/logo.png" type="">
      <title>Africa Shope</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="Home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="Home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="Home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="Home/css/responsive.css" rel="stylesheet" />
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="Home/assets/images/favicon.ico">
    <link rel="icon" href="Home/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Home/assets/images/favicon.ico" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="assets/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <link rel="preconnect" href="https://fonts.gstatic.com">

   

    <link id="rtl-link" rel="stylesheet" type="text/css" href="Home/assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" href="Home/assets/css/vendors/ion.rangeSlider.min.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/slick/slick-theme.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="Home/assets/css/demo4.css">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link id="color-link" rel="stylesheet" type="text/css" href="Home/assets/css/demo2.css">
   </head>
   

<body class="theme-color4 light ltr">
   
    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            background: #e87316;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
        
    </style>
     <div class="hero_area">
        <!-- header section strats -->
       @include('home.header')

   
     

    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="demo3.php" class="active">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.php">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Détails {{$product->title}} </h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="Home/index.htm">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section> <!-- Shop Section start -->

    <section>
        <div class="container">
            <div class="row gx-4 gy-5">
                <div class="col-lg-12 col-12">
                    <div class="details-items">
                        <div class="row g-4">
                            <div class="col-md-6">
                                @if($product->title =='Brocart')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="product/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart1.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart5.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart6.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart7.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="product/{{$product->image}}" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/product/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart1.jpg" id="zoom_02"
                                                    data-zoom-image="Home/assets/images/fashion/brocart/brocart1.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart2.jpg" id="zoom_03"
                                                    data-zoom-image="Home/assets/images/fashion/brocart/brocart2.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart3.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/brocart/brocart3.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart4.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/brocart/brocart4.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart5.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/brocart/brocart5.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart6.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/brocart/brocart6.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/brocart/brocart7.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/brocart/brocart7.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($product->title =='Ibiza')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="product/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 1.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 5.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 6.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA.webp"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="product/{{$product->image}}" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/product/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 1" id="zoom_02"
                                                    data-zoom-image="Home/assets/images/fashion/ibiza-ma/IBIZA 1.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 2.jpg" id="zoom_03"
                                                    data-zoom-image="Home/assets/images/fashion/ibiza-ma/IBIZA 2.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 3.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/ibiza-ma/IBIZA 3.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 4.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/ibiza-ma/IBIZA 4.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 5.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/ibiza-ma/IBIZA 5.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA 6.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/ibiza-ma/IBIZA 6.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/ibiza-ma/IBIZA.webp" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/ibiza-ma/IBIZA.webp"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($product->title =='Table Bubbles')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="product/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-b2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-b3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="product/{{$product->image}}" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/product/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-b2.jpg" id="zoom_02"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-b2.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-b3.jpg" id="zoom_03"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-b3.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                @endif
                                
                                @if($product->title =='Table Panier')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="product/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-p2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-p3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                           
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="product/{{$product->image}}" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/product/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-p2.jpg" id="zoom_02"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-p2.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-p3.jpg" id="zoom_03"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-p3.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($product->title =='Table Pièrre Naturelle')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="product/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-prn2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-prn3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-prn4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="product/{{$product->image}}" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/product/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-prn2.jpg" id="zoom_02"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-prn2.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-prn3.jpg" id="zoom_03"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-prn3.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-prn4.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-prn4.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($product->title =='Table Verre Plastique')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="product/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-vp2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-vp3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-vp4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="product/{{$product->image}}" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/product/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-vp2.jpg" id="zoom_02"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-vp2.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-vp3.jpg" id="zoom_03"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-vp3.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/tables/table-vp4.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/tables/table-vp4.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($product->title =='Vase Unique')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="product/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase6.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase10.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase7.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase13.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase11.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase5.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="product/{{$product->image}}" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/product/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase6.jpg" id="zoom_02"
                                                    data-zoom-image="Home/assets/images/fashion/decoration/vase6.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase10.jpg" id="zoom_03"
                                                    data-zoom-image="Home/assets/images/fashion/decoration/vase10.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase7.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/decoration/vase7.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase13.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/decoration/vase13.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase11.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/decoration/vase11.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/decoration/vase5.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/decoration/vase5.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($product->title =='Cuir Compo')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="product/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO5.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO6.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO7.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="product/{{$product->image}}" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/product/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO2.jpg" id="zoom_02"
                                                    data-zoom-image="Home/assets/images/fashion/compos/COMPO2.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO3.jpg" id="zoom_03"
                                                    data-zoom-image="Home/assets/images/fashion/compos/COMPO3.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO4.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/compos/COMPO4.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO5.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/compos/COMPO5.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO6.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/compos/COMPO6.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/compos/COMPO7.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/compos/COMPO7.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($product->title =='Vase Unique')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="product/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet1.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet5.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet6.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet7.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet8.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet9.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet10.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet11.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="product/{{$product->image}}" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/product/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet1.jpg" id="zoom_02"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet1.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet2.jpg" id="zoom_03"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet2.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet3.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet3.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet4.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet4.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet5.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet5.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet6.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet6.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet7.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet7.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet8.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet8.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet9.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet9.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet10.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet10.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="Home/assets/images/fashion/velvet/velvet11.jpg" id="zoom_04"
                                                    data-zoom-image="Home/assets/images/fashion/velvet/velvet11.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <div class="cloth-details-size">
                                    <div class="product-count">
                                        <ul>
                                            <li>
                                                <img src="Home/assets/images/gif/fire.gif"
                                                    class="img-fluid blur-up lazyload" alt="image">
                                                <span class="p-counter">37</span>
                                                <span class="lang">orders in last 24 hours </span>
                                            </li>
                                            <li>
                                                <img src="Home/assets/images/gif/person.gif"
                                                    class="img-fluid user_img blur-up lazyload" alt="image">
                                                <span class="p-counter">44</span>
                                                <span class="lang">active view this</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="details-image-concept">
                                        <h2>{{$product->title}} </h2>
                                    </div>

                                    <div class="label-section">
                                        <span class="badge badge-grey-color">#1 Best seller</span>
                                       
                                    </div>
                                    @if($product->discount_price!=null)

                                    <h3 class="price-detail">{{$product->discount_price}} MAD <del>{{$product->price}}MAD</del></h3>
                                    @else
                                    <h3 class="price-detail">{{$product->price}}MAD </h3>
                                    @endif

                                  

                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                       
                                        </h6>

                                       

                                        <div class="size-box">
                                           
                                        </div>

                                        <h6 class="product-title product-title-2 d-block">quantity</h6>

                                        
                                    <div class="product-buttons">
                                      
                                        
                                           
                                            
                                            <form action="{{url('add_cart',$product->id)}}" method="POST">
                                                @csrf
                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <button style="background-color:rgb(56,182,255) !important;" type="button" class="btn quantity-left-minus mr-2"
                                                                onclick="updateQuantity()" data-type="minus" data-field="">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                        </span>
                                                        <input type="text" name="quantity" id="quantity"
                                                            class="form-control input-number" value="1">
                                                        <span class="input-group-prepend">
                                                            <button style="background-color:rgb(56,182,255) !important;"  type="button" class="btn quantity-right-plus ml-2"
                                                                onclick="updateQuantity()" data-type="plus" data-field="">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button  style="color:white; background-color:rgb(56,182,255) !important;  padding-left:20px;"  type="submit"  class="btn btn-solid hover-solid btn-animation">Add to card <i id="cartEffect" class="fa fa-shopping-cart"></i></button>
        
                                                
                                             
                                             </form> 
                                       
                                                
                                            </form>
                                      



                                    </div>

                                    <ul class="product-count shipping-order">
                                        <li>
                                            <img src="Home/assets/images/gif/truck.png" class="img-fluid blur-up lazyload"
                                                alt="image">
                                            <span class="lang">Free shipping for orders above 600 MAD</span>
                                        </li>
                                    </ul>

                                    <div class="mt-2 mt-md-3 border-product">
                                        <h6 class="product-title hurry-title d-block">Hurry Up! Left <span style="color:rgb(56,182,255);">{{$product->quantity}}</span> in
                                            stock</h6>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 78%; background-color:rgb(56,182,255)"></div>
                                        </div>
                                        <div class="font-light timer-5">
                                            <h5>Order in the next to get</h5>
                                            
                                        </div>
                                    </div>

                                    <div class="border-product">
                                        <h6 class="product-title d-block">share it</h6>
                                        <div class="product-icon">
                                            <ul class="product-social">
                                                <li>
                                                    <a href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.google.com/">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="pe-0">
                                                    <a href="https://www.google.com/">
                                                        <i class="fas fa-rss"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="cloth-review">
                       

                       
            </div>
        </div>
    </section>
    <!-- Shop Section end -->

    <!-- product section start -->
   
    
    <!-- product section end -->

      
    
   
   
    



      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By Africa Shope<br></p>n</a>
         
         </p>
      </div>
      <div class="tap-to-top" style="background-color: rgb(56,182,255) !important;;">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
      <!-- jQery -->
      <script src="Home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="Home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="Home/js/bootstrap.js"></script>
      <!-- custom js -->
     
      <script src="Home/js/custom.js"></script>
      <div class="bg-overlay"></div>
      <script src="Home/assets/js/jquery-3.5.1.min.js"></script>
    <script src="Home/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="Home/assets/js/feather/feather.min.js"></script>
    <script src="Home/assets/js/lazysizes.min.js"></script>
    <script src="Home/assets/js/slick/slick.js"></script>
    <script src="Home/assets/js/slick/slick-animation.min.js"></script>
    <script src="Home/assets/js/slick/custom_slick.js"></script>
    <script src="Home/assets/js/price-filter.js"></script>
    <script src="Home/assets/js/ion.rangeSlider.min.js"></script>
    <script src="Home/assets/js/filter.js"></script>
    <script src="Home/assets/js/newsletter.js"></script>
    <script src="Home/assets/js/cart_modal_resize.js"></script>
    <script src="Home/assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="Home/assets/js/theme-setting.js"></script>
    <script src="Home/assets/js/script.js"></script>
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>
    <script>
        function updateQuantity() {
            $("#qty").val(parseInt($("#quantity").val()) + 1);
        }
    </script>
   </body>
</html>