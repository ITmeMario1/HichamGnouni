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

   
    <link id="color-link" rel="stylesheet" type="text/css" href="Home/assets/css/demo2.css">
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
          @include('home.why')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.new_arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('home.product')
      <!-- end product section -->
      {{-- comment and reply system starts here --}}




      {{-- comment and reply system end here --}}

      <!-- subscribe section -->
      @include('home.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.client ')
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved Africa shope<br>
         
           
         
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