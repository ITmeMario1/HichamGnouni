<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="images/logo.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
              
                   <li class="nav-item">
                      <a class="nav-link" href="{{url('about')}}">About</a>
                     
                   </li>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('products')}}">Products</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('blog')}}">Reviews</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
               
                
                 @if (Route::has('login'))
                 @auth 
                 <li class="nav-item">
                  <a style="position: relative;" class="nav-link" href="{{url('show_order')}}">Order</a>
                 </li>
                 <li class="nav-item">
                  <a style="position: relative;" class="nav-link" href="{{url('show_cart')}}">
                     <i  class="fa-solid fa-cart-shopping"></i>
                     <span style="display: flex;width:18px;height:18px;background-color:rgb(255,145,77);justify-content:center;align-items:center;
                     color:#fff;border-radius:50%;position:absolute;top:1%;right:-2px;">{{$count}} </span>
                  </a>
                 </li>
                
                 {{-- <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
               </form> --}}
                 <x-app-layout>
      
                 </x-app-layout>
                 @else
                <li class="nav-item">
                    <a  class="nav-link"  href="{{ route('login') }} " id="logincss">Login</a>
                 </li>
                 <li class="nav-item">
                    <a  class="nav-link" href="{{ route('register') }}">Register</a>
                 </li>
                 
                 {{-- <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
               </form> --}}
                
                 @endauth
                 @endif
                
               
             </ul>
          </div>
       </nav>
    </div>
 </header>