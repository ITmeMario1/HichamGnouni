<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Africa Shope</title>
   <style>
      .arrival_section{
        
         padding: 0 !important;
      }
     
      .video-container {
        
          width: 500px; /* Ajustez la taille selon vos besoins */
          height: 473px; /* Assurez-vous que c'est un carré pour une forme ronde parfaite */
          display: flex;
          overflow: hidden;
         
          padding-bottom: 30px;
         
         
         
          
        
      }
      .video-container video {
          width: 100%;
          height: 100%;
          object-fit: cover; /* Pour couvrir complètement le conteneur */
          
      }
  </style>
</head>
<body>
   
<section class="arrival_section">
   <div class="container">
      <div class="box">
         <div class="arrival_bg_box">
           <div class="video-container" >
           <video   autoplay muted loop>
              <source src="{{ asset('videos/hijab.mp4') }}" type="video/mp4">
              
          </video>
        </div>
         </div>
         <div class="row">
            <div class="col-md-6 ml-auto">
               <div class="heading_container remove_line_bt">
                  <h2>
                     #Change your mood
                  </h2>
               </div>
               <p style="margin-top: 20px;margin-bottom: 30px;">
                  Shine, your space, with our high-quality pieces, in cheerful and fashionable colours..
                  These pieces are imported from abroad in a modern and distinctive style......
               </p>
               <a href="{{url('products')}}">
               Shop Now
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
</body>
</html>