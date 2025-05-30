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
         width: 90%;
         max-width: 1200px;
         background: #fff;
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     }
     h1 {
         font-size: 2.5em;
         margin-bottom: 20px;
     }
     .contact-form {
         display: flex;
         flex-direction: column;
     }
     .contact-form label {
         margin-bottom: 5px;
     }
     .contact-form input,
     .contact-form textarea {
         margin-bottom: 10px;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
     }
     .contact-form button {
         padding: 10px;
         border: none;
         border-radius: 5px;
         background-color: #333;
         color: #fff;
         cursor: pointer;
     }
     .contact-form button:hover {
         background-color: #555;
     }
     .map {
         margin-top: 20px;
         width: 100%;
         height: 400px;
     }
 </style>

   
    
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         <section class="inner_page_head">
            <div class="container_fuild">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <h3>Contact us</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="container">
            
            <form class="contact-form">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
    
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
    
                <button type="submit">Send</button>
            </form>
            <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.854919906833!2d-7.644196225473068!3d33.58311594235792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d3192ee27baf%3A0xca43f26ed8d6e2a1!2sShiva%20Interiors!5e0!3m2!1sfr!2sma!4v1719565027712!5m2!1sfr!2sma" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By Africa Shope<br></p>
         
         </p>
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
      
   </body>
</html>