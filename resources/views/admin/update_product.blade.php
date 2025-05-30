<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .div_center{
            
            padding-top:40px; 
        }
        .font_size{
            font-size: 40px;
            text-align: center;
            padding-bottom: 40px;
            text-decoration-line:  underline   ;
            text-decoration-color: rgb(102,16,242);
            
           
        }
        
        .div_deg{
            padding-bottom:15px;
        }
        .sected{
            color: gray;
        }
        option{
            color: black;
        }
        .input_color{
            color: black;
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
        <div class="content-wrapper">
            <div class="div_center">
                @if (@session()->has('message'))
                <div class="alert alert-success">
                  
                  {{session()->get('message')}}
                  <button  type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                </div>
                    
                @endif
                <div class="div_center">
                    <h1 class="font_size">Update Product</h1>
                    <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div  class="div_deg">
                        <label for="">Product Title:</label>
                    <input class="input_color form-control" type="text" name="title" placeholder="Write a title" value="{{$product->title}}" required>
                    </div>
                    <div  class="div_deg">
                        <label for="">Product Description:</label>
                    <input class="input_color form-control" type="text" name="description" placeholder="Write a description" value="{{$product->description}}" required>
                    </div>
                    <div  class="div_deg">
                        <label for="">Product Price:</label>
                    <input class="input_color form-control" type="number" name="price" placeholder="Write a price" value="{{$product->price}}" required>
                    </div>
                    <div  class="div_deg">
                        <label for="">Discount Price:</label>
                    <input class="input_color form-control" type="number" name="discount" placeholder="Write a discount" value="{{$product->discount_price}}">
                    </div>
                    <div  class="div_deg">
                        <label for="">Product Quantity:</label>
                    <input class="input_color form-control" type="number" name="quantity" min="0" placeholder="Write a quantity" value="{{$product->quantity}}"  required>
                    </div>
                    
                    <div  class="div_deg">
                        <label for="">Product Category:</label>
                         <select class="sected" style="width: 100%;" name="category" id="" required>
                            <option value="{{$product->category}}" selected>{{$product->category}}</option>
                            @foreach ($category as $category)
                            
                            <option value="{{$category->category_name}}">{{$category->category_name}} </option>
                            @endforeach
                          
                         </select>
                    </div>
                    <div class="div_deg">
                        <label for="">Current Product Image:</label>
                        <img src="product/{{$product->image}}" alt="">
                    </div>
                    <div class="div_deg">
                        <label for="">Change Product Image:</label>
                    <input class="input_color form-control" type="file" name="image">
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" value="Update Product">
                    </div>
                </form>

                </div>

            </div>
        </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>