<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .table{
          border: 1px solid rgb(233,30,99);
          margin-top:40px; 
          width: 50% !important;
        }
        th{
          font-size: 100px;
          color: white;
          background-color: rgb(233,30,99);
          text-align: center;
        }
        td{
          border: 1px solid rgb(233,30,99);
          text-align: center;
          color: white;
        }
        .htow{
          text-align: center;
          font-size: 30px;
          text-decoration-line:  underline   ;
            text-decoration-color: rgb(233,30,99);
          
        }
        .container-scroller{
            padding: 0 !important;
            margin: 0 !important;
        }
        .inputStyle{
          text-align: center;
          padding-top: 20px;
        }
        .container-scroller{
          padding-left: 0;
        }
        .main-panel{
          padding-left: 0;

        }
        .content-wrapper{
          padding-left: 0;
        }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
       <!-- partial:partials/_navbar.html -->
       @include('admin.header')
       <div class="main-panel">
        <div class="content-wrapper">
            @if (@session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
              {{session()->get('message')}}

            </div>
           
                
            @endif
            <h2 class="htow">All Orders</h2>
            <div class="inputStyle">
              <form action="{{url('search')}}" method="GET">
                @csrf 
                <input type="text" name="search" style="width: 60%;color:black;"  placeholder="search for Something">
                <input type="submit" value="Search"class="btn btn-outline-primary">
              </form>
            </div>
              <table class="table">
                  <tr>
                      <th>Name</th>
                      <th>Email</th>
                     
                      <th>Phone</th>
                      <th>Product Title</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Payment Status</th>
                      <th>Delivery Status</th>
                      <th>Image</th>
                      <th>Delivered</th>
                      <th>Print pdf</th>
                      
                     
                  </tr>
                  @forelse ($product as $product)
                      
                 
                  <tr>
                      <td>{{$product->name}} </td>
                      <td>{{$product->email}}</td>

                      <td>{{$product->phone}}</td>
                      <td>{{$product->product_title}}</td>
                      <td>{{$product->quantity}}</td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->payment_status}}</td>
                      <td>{{$product->delivery_status}}</td>
                      
                      <td>
                        <img  class="image" width="80" height="100" src="/product/{{$product->image}}" alt="">
                      </td>
                      <td>
                        @if ($product->delivery_status=='processing')
                            
                       
                        <a class="btn btn-primary" onclick="return confirm('Are you sure this product is delivered  !!!')" href="{{url('delivered',$product->id)}}">Delivered</a>
                        @else
                        <p style="color:green;">Delivered</p>
                        @endif
                      </td>
                      <td>
                        <a class="btn btn-secondary" href="{{url('print_pdf',$product->id)}}">Print pdf </a>
                      </td>
                      
                  </tr>
                  @empty
                  <tr>
                    <td colspan="16">
                      No Data Found
                    </td>
                  </tr>
                 
                      
                 
                  @endforelse
              </table>
          </div>
      </div>

        </div>
       </div>
        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>