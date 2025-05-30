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
      <link rel="shortcut icon" href="images/logotitle.png" type="">
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

   
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
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
                        <h3 >Reviews</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end inner page section -->
         <!-- why section -->
         <section class="subscribe_section">
     
            <div class="container-fuild">
               <div class="box">
                  <div class="row">
                     <div class="col-md-6 offset-md-3">
                        <div class="subscribe_form ">
                           <div class="heading_container heading_center">
                              <h3>Customer <span style="color: rgb(255,145,77);"> Reviews</span></h3>
                           </div>
                           
                          
                           <form action="{{url('add_comment')}}" method="POST">
                             @csrf
                              <textarea class="form-control sm" placeholder="Give your opinion here..." style="width: 600px;height:50px !important ;text-align:center;" name="comment" id="" cols="30" rows="10"></textarea>
                              
                              <input style="text-align: center !important ;color:black;width:21%;" type="submit" value="Comment" >
                              
                           </form>
                           
                        </div>
                        
                        
                     </div>
                    
                  </div>
                  <div style="padding-right: 80%;">
                    <h3 style="font-size: 30px; padding-top:20px;">All Comments</h3>
                  </div>
                  @foreach ($comment as $comment)
                      
                  <hr>
                  <div style="padding-right: 50%; padding-top:20px;">
                    <b>{{$comment->name}} </b>
                    <p>{{$comment->comment}} </p>
                   
                    <a style="color:rgb(56,182,255);"  onclick="reply(this)" href="javascript::void(0);" data-commentid="{{$comment->id}}">Reply</a>
                    @foreach($reply as $rep)
                    @if ($rep->comment_id==$comment->id)
                        
                   
                    <div style="padding-left: 10%; padding-bottom:10px;padding">
                       <b>{{$rep->name}} </b>
                       <p>{{$rep->reply}} </p>
                       <a style="color:rgb(56,182,255);" onclick="reply(this)" href="javascript::void(0);" data-commentid="{{$comment->id}}">Reply</a>
     
                    </div>
                    @endif
                    @endforeach
                    
                  </div>
                  @endforeach
                 
                  <div class="replyDiv" style=" padding-top:20px;display:none;">
                    <form action="{{url('add_reply')}}" method="POST">
                       @csrf
                    <input type="text" id="commentid" name="commentid" hidden>
                    <textarea  style="height: 50px; width:500px;" name="reply" placeholder="write something here"></textarea>
                    <br>
                    <input style="margin-right: 44%" type="submit" class="btn btn-primary" value="Reply" >
                    
                    <a onclick="reply_close(this)" style="margin-right: 10%;color:rgb(255,145,77);"  href="javascript::void(0);" class="btn">close</a>
                 </form>
                  </div>
                 
               </div>
               
            </div>
          
            
         </section>
         <script>
           function reply(caller)
           {
              document.getElementById('commentid').value=$(caller).attr('data-commentid');
              $('.replyDiv').insertAfter($(caller));
              $('.replyDiv').show();
           }
           function reply_close(caller)
           {
             
              $('.replyDiv').hide();
           }
        </script>
      
   </body>
</html>