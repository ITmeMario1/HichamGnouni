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
     
      <title>Products</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="Home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="Home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="Home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="Home/css/responsive.css" rel="stylesheet" />
      {{-- bcbcbcb----------------------------------------------- --}}
      <style>
              
        .card-img-top {
         height: 350px;
         object-fit: cover;
         transition: transform 0.4s, filter 0.4s;
         filter: drop-shadow(0 8px 24px hsla(170, 12%, 8%, 0.1));
     }
 
     .card:hover .card-img-top {
         transform: scale(1.05);
         filter: drop-shadow(0 12px 32px hsla(170, 12%, 8%, 0.2));
     }
     .position-relative .badge {
         font-size: 1rem;
         padding: 0.5em 1em;
         border-radius: 0.5em;
     }
     .detail-box {
       font-size: 1.5rem !important;
     }
     .title{
       padding-top: 30px !important;
       color:rgb(56,182,255) !important;
       
       font-size:20px ;
       font-weight: bold;
       
     }
     
     
 
    </style>

   
    
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
        <section class="inner_page_head">
            <div class="container_fuild">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <h3>Product Grid</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end header section -->
         <!-- slider section -->
         <section class="product_section layout_padding">
           
            <div class="container">
               <div class="heading_container heading_center">
                  <h2>
                     Our <span>products</span>
                  </h2>
               </div>
               <div>
                  <form action="{{url('product_search')}}" method="GET">
                     @csrf
                     <input  style="margin-left:320px;width: 500px; text-align:center;" type="text" name="search" placeholder="Search for Something...">
                     <input  type="submit" value="search">
                  </form>
               </div>
               <div class="row">
                 
                      
                  @foreach ($data as $products)
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a   href="{{url('product_details',$products->id)}}" class="option1">
                              Product Details
                              </a>
                              
                                
                              <form action="{{url('add_cart',$products->id)}}" method="POST">
                                 @csrf
                                
                                 <input class="option2 " style="width: 85px;border-radius: 50%; 
                               margin-left:45px;margin-top:15px;" type="number" name="quantity" value="1" min="1">
                             
         
                                 <input style="border-radius: 40%;" class="option2 " type="submit" value="Add to card">
                             
                              </form>
                            
                           </div>
                        </div>
                        <div class="position-relative ">
                           <img class="card-img-top"  src="product/{{$products->image}}" alt="">
                        </div>
                        <div class="title">
                           <h5 style="font-size: 1.5rem !important;color:rgb(56,182,255) !important;" class="text">
                              {{$products->title}}
                            </h5>
                        </div>
                        <div class="detail-box ">
                          
                           @if($products->discount_price!=null)
                               
                         
                           <h6 style="font-size: 1.5rem !important; font-weight: bold; color: green;">
                              {{$products->discount_price}} MAD
                           </h6>
                           <h6 style="font-size: 1.5rem !important; text-decoration: line-through; color: red;">
                              {{$products->price}} MAD
                           </h6>
         
                          @else
                         
                           <h6 style="font-size: 1.5rem !important;font-weight: bold; color: green;" >
                              {{$products->price}} MAD
                           </h6>
                           @endif
                        </div>
                       
                     </div>
                  </div>
                  @endforeach
                
                  
              
         </section>
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By Africa Shope<br></p>
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
     
     </script>
     <script>
      document.addEventListener("DOMContentLoaded", function (event) {
          var scrollpos = sessionStorage.getItem('scrollpos');
          if (scrollpos) {
              window.scrollTo(0, scrollpos);
              sessionStorage.removeItem('scrollpos');
          }
      });
  
      window.addEventListener("beforeunload", function (e) {
          sessionStorage.setItem('scrollpos', window.scrollY);
      });
  </script>
   </body>
</html>