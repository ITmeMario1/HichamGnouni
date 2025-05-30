
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

   
      <style>
         
        
        
        .container {
            display: flex;
            justify-content: space-between;
            width: 90%;
            max-width: 1200px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .video-container {
            flex: 1;
            margin-right: 20px;
        }
        .video-container video {
            width: 90%;
            border-radius: 10px;
        }
        .content {
            flex: 1;
            color: #333;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        h1{
         font-size: 50px !important;
         text-align: center;
         color:  rgb(56,182,255);
        }
        strong{
         color:  rgb(56,182,255);

        }
     </style>
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
         <section class="inner_page_head">
            <div class="container_fuild">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <h3>About us</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="container">
            <div class="video-container" >
               <video   autoplay muted loop>
                  <source src="{{ asset('videos/abount1.mp4') }}" type="video/mp4">
                  
              </video>
            </div>
            <div class="content">
            <h1>Bienvenue chez Africa Shope</h1>
            <p>Votre destination en ligne dédiée aux tissus d'ameublement et aux décorations pour la maison.</p>
          
            <p>Fondée en <strong>2024</strong>, notre mission est de proposer des produits élégants, modernes et authentiques, permettant à chaque foyer de refléter la beauté et la richesse de la culture marocaine.</p>
            <p>Nous offrons une large gamme de :</p>
            <ul>
                <li><strong>Tissus d'ameublement</strong></li>
                <li><strong>Décorations de table</strong></li>
                <li><strong>Tables d'appoint</strong></li>
                <li><strong>Tissus de rideaux</strong></li>
            </ul>
            <p>Tous nos produits sont sélectionnés pour leur <strong>qualité</strong> et leur <strong>style unique</strong>.</p>
            <p>Chez <strong>Africa Shope</strong>, nous nous engageons à fournir :</p>
            <ul>
                <li>Un <strong>service client exceptionnel</strong></li>
                <li>Des <strong> articles authentiques et éthiques</strong></li>
                <li>Des <strong>articles de haute qualité</strong></li>
            </ul>
            <p>Rejoignez notre communauté et découvrez la beauté et l'élégance de notre produits.</p>
            <p><strong>Africa Shope - Élégance et Authenticité pour Votre Intérieur</strong></p>
          </div>
         </div>
        </div>
         <!-- slider section -->
        
      <!-- end product section -->
      {{-- comment and reply system starts here --}}




      {{-- comment and reply system end here --}}

      <!-- subscribe section -->
     
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved Africa Shope<br>
         
           
         
         </p>
      
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
    
   </body>
</html>