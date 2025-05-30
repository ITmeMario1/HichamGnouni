<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
       .div_center{
        
        text-align: center;
        padding-top: 40px;
       }
       .h1_div{
        font-size: 40px;
        padding-bottom: 40px;

       }
       .input_color{
        color: black;
        width: 60%;
       }
       .center
       {
        margin:auto;
        width: 83%;
        text-align: center;
        margin-top:30px;
         
       }
       th{
          background-color:  rgb(94,80,249) !important;
          padding: 10px;
          color: white !important;
        }
        tr{
          border:1px solid rgb(94,80,249);
          padding:10px;
}
.btnn{
  background-color: rgb(94,80,249);
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
                <div class="div_center">
                  @if (@session()->has('message'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}

                  </div>
                      
                  @endif
                    <h1 class="h1_div">Add Category</h1>
                    <form action="{{url('/add_catagory')}}" method="POST">
                      @csrf
                      <input type="text" class="input_color" name='catagory' placeholder="write category name">
                      <input type="submit" class="btnn  w-60 h-10" name="submit" value="Add category" >
                    </form>
                </div>
                <table class="center table">
                  <tr>
                    <th>Category Name</th>
                    <th>Actions</th>
                  </tr>
                  @foreach ($data as $data)
                  <tr>
                    <td>{{$data->category_name}} </td>
                    <td><a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a></td>
                  </tr>
                  @endforeach
                 
                 
                </table>
            </div>  
        </div> 
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    <script type="text/javascript">
       
      function confirmation(ev) {
       ev.preventDefault();
       var urlToRedirect = ev.currentTarget.getAttribute('href');  
       console.log(urlToRedirect); 
       swal({
           title: "Are you sure to Delete this post",
           text: "You will not be able to revert this!",
           icon: "warning",
           buttons: true,
           dangerMode: true,
       })
       .then((willCancel) => {
           if (willCancel) {


                
               window.location.href = urlToRedirect;
              
           }  


       });

       
   }
      </script>
  </body>
</html>