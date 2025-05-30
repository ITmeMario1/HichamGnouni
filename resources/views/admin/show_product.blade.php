<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Africa Shope</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
      .table{
        border: 1px solid rgb(233,30,99);
        margin-top:40px; 
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
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
              @if (@session()->has('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}

              </div>
                  
              @endif
              <h2 class="htow">All Products</h2>
                <table class="table">
                    <tr>
                        <th>Product title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Product Image</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    @foreach ($product as $product)
                        
                   
                    <tr>
                        <td>{{$product->title}} </td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                          <img style=" text-align: center; width: 200px; height: 200px;  border-radius::10%;" class="image" width="80" height="100" src="product/{{$product->image}}" alt="">
                        </td>
                        <td>
                          <a onclick="return confirm('Are you Sure to Delete this')" class="btn btn-danger" href="{{url('delete_product',$product->id)}}">Delete</a>
                        </td>
                        <td>
                          <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
   
  </body>
</html>
</body>
</html>