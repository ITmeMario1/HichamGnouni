<!DOCTYPE html>
<html>
   <head>
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
      {{-- bcbcbcb----------------------------------------------- --}}
      <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
      <link rel="manifest" href="manifest.json">
      <link rel="apple-touch-icon" href="Home/assets/images/favicon.ico">
      <link rel="icon" href="Home/assets/images/favicon.ico" type="image/x-icon">
      <link rel="icon" href="Home/assets/images/favicon.ico" type="image/x-icon">
      <meta name="theme-color" content="#e87316">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="apple-mobile-web-app-title" content="Surfside Media">
      <meta name="msapplication-TileImage" content="Home/assets/images/favicon.ico">
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
  

   
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   </head>
   <body class="theme-color4 light ltr">
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
        
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
                            <h3>Cart</h3>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{url('/')}}">
                                            <i class="fas fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- Cart Section Start -->
            <section class="cart-section section-b-space">
                <div class="container">
                    @if (@session()->has('message'))
                    <div class="alert alert-success">
                      
                      {{session()->get('message')}}
                      <button  type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
    
                    </div>
                        
                    @endif
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <table class="table cart-table">
                                <thead>
                                    <tr class="table-head">
                                        <th  style="background-color: rgb(56,182,255) !important;"  scope="col">image</th>
                                        <th  style="background-color: rgb(56,182,255) !important;" scope="col">product name</th>
                                        <th  style="background-color: rgb(56,182,255) !important;" scope="col">price</th>
                                        <th  style="background-color: rgb(56,182,255) !important;" scope="col">quantity</th>
                                        <th style="background-color: rgb(56,182,255) !important;" scope="col">total</th>
                                        <th style="background-color: rgb(56,182,255) !important;" scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $totalprice=0;?>
                                    
                                    @if ($count != 0)
                                    <?php $count=0;?>
                                        
                                    
                                    @foreach ($cart as $cart)
                                        
                                   
        
                                    <tr>
                                        <td>
                                            <a href="Home/product/details.html">
                                                <img src="product/{{$cart->image}}" class="blur-up lazyloaded"
                                                    alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="Home/product/details.html">{{$cart->product_title}} </a>
                                           
                                        </td>
                                        <td>
                                            <h2 style="color: rgb(56,182,255) !important;">{{$cart->price}} MAD</h2>
                                        </td>
                                        <td>
                                            <div class="qty-box">
                                                {{$cart->quantity}} 
                                               
                                            </div>
                                        </td>
                                        <td>
                                            <h2 class="td-color">{{$cart->price}} MAD</h2>
                                        </td>
                                        <td>
                                            <a  style="background-color: rgb(56,182,255) !important;" class="btn" onclick="confirmation(event)" href="{{url('remove_cart',$cart->id)}}">Remove</a>
                                        </td>
                                        
                                    </tr>
                                    <?php $totalprice=$totalprice + $cart->price?>
                                    <?php $count=$count + 1?>
                                    @endforeach
                                    @else
                                    <td>
                                        <p>No item in cart</p>

                                    </td>
                                        
                                    @endif
        
                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-md-5 mt-4">
                            <div class="row">
                                <div class="col-sm-7 col-5 order-1">
                                    <div class="left-side-button text-end d-flex d-block justify-content-end">
                                        <a href="{{url('clear')}}" style="color:rgb(56,182,255) !important;"
                                            class="text-decoration-underline theme-color d-block text-capitalize">clear
                                            all items</a>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-7">
                                    <div  class="left-side-button float-start">
                                        <a href="Home/shop.html"  class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                            <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="cart-checkout-section">
                            <div class="row g-4">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="promo-section">
                                        <form class="row g-3">
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="number" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-5">
                                                <button    class="btn btn-solid-default rounded btn">Apply Coupon</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
        
                                <div class="col-lg-4 col-sm-6 ">
                                    <div class="checkout-button">
                                        <a  href="{{url('cash_order')}}" class="btn btn-solid-default btn fw-bold">
                                           Cash On Delivery <i class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
        
                                <div class="col-lg-4">
                                    <div class="cart-box">
                                        <div class="cart-box-details">
                                            <div class="total-details">
                                                <div class="top-details">
                                                    <h3>Cart Totals</h3>
                                                    <h6>Sub Total <span><?php echo $totalprice?> MAD</span></h6>
                                                    <h6>Tax <span>20MAD</span></h6>
                                                    <?php $total=20?>
                                                    @if($totalprice==0)
                                                    <?php $total=0?>
                                                    @else
                                                    <?php $total=$total +$totalprice?>
                                                    @endif
        
                                                    <h6>Total <span>{{$total}} </span></h6>
                                                </div>
                                                <div class="bottom-details">
                                                    <a style="background-color: rgb(56,182,255) !important;"  href="{{url('stripe',$total)}}">Pay Using Card</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <div class="tap-to-top" style="background-color:rgb(56,182,255);">
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
      {{-- gdffhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh --}}
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
      <script type="text/javascript">
       
        function confirmation(ev) {
         ev.preventDefault();
         var urlToRedirect = ev.currentTarget.getAttribute('href');  
         console.log(urlToRedirect); 
         swal({
             title: "Are you sure to Delete this post",
             text: "You will not be able to revert this!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willCancel) => {
             if (willCancel) {
  
  
                  
                 window.location.href = urlToRedirect;
                
             }  
  
  
         });
  
         
     }
        </script>
    
   </body>
</html>