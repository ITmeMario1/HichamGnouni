<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Africa Shope</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <style>
      .heading_container h3::after {
    content: "";
    display: block;
    width: 70px;
    height: 5px;
    background: #38b6ff;
    margin: 10px auto 10px;
}
   </style>
  
</head>
<body>
   <section class="subscribe_section">
     
      <div class="container-fuild">
         
         <div class="box">
            @if (@session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
              {{session()->get('message')}}
      
            </div>
                
            @endif
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <div class="subscribe_form ">
                     <div class="heading_container heading_center">
                        <h3>Subscribe To Get Discount Offers</h3>
                     </div>
                     <p></p>
                     <form action="{{url('subs')}}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Enter your email">
                        <button type="submit">
                        subscribe
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</body>
</html>