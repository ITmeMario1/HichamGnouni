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
        th{
            background-color: rgb(248,97,106);
        }
       table,th,td{
      
        text-align: center !important;
        border:1px solid rgb(248,97,106);
       }
      </style>

   
    
      
   </head>
   <body>
      <div class="">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         <section class="inner_page_head">
            <div class="container_fuild">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <h3>Your Orders</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div>
            <table class="table">
                <tr>
                    <th>Product title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Cancel Order</th>
                </tr>
                @foreach($order as $order)
                <tr>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img  height="100" width="100" src="product/{{$order->image}}" alt="">
                    </td>
                    <td>
                        @if($order->delivery_status=='processing')
                        <a onclick="return confirm('Are You Sure to Cancel this Order!!!!')" style="margin-top:40px; "  class="btn btn-danger" href="{{url('cancel_order',$order->id)}} ">Cancel</a>
                        @else
                        <p style='color:blue;'>Not Allowed</p>
                        @endif

                    </td>
                </tr>
                @endforeach
            </table>
         </div>
         
        
      
      <!-- footer end -->
      
      
      <!-- jQery -->
      <script src="Home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="Home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="Home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="Home/js/custom.js"></script>
      {{-- gdffhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh --}}
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