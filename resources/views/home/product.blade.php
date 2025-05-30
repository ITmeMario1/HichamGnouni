<section class="product_section layout_padding">
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
      
      font-size:20px ;
      font-weight: bold;
      
    }
    .option2{
     
    }
    

   </style>
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Our <span>products</span>
         </h2>
      </div>
      <div class="row">
        
             
         @foreach ($product as $products)
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
                  <h5 style="font-size: 1.5rem !important; color:rgb(56,182,255) !important;" class="text">
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
         <span style="padding-top:20px;">
        {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
      </span>
         
      
</section>