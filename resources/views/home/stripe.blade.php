<!DOCTYPE html>
<html>
<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="Home/assets/images/favicon.ico">
    <link rel="icon" href="Home/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Home/assets/images/favicon.ico" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="Home/assets/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <link rel="preconnect" href="https://fonts.gstatic.com">

   

    <link id="rtl-link" rel="stylesheet" type="text/css" href="Home/assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" href="Home/assets/css/vendors/ion.rangeSlider.min.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="Home/assets/css/vendors/slick/slick-theme.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="Home/assets/css/demo4.css">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{-- GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG --}}
    
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
</head>
<body  class="theme-color4 light ltr">
    <div class="hero_area">
        <!-- header section strats -->
        <span style="font-size;18px !important;"> @include('home.header')</span>
      
    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Checkout</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    
<div class="container">
    
    <h1 style="color:  rgb(56,182,255);font-size:30px;text-align:center;padding-bottom:20px;padding-top:20px;">Pay Using your card:</h1>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                        <h3 style="color:  rgb(56,182,255);font-size:18px;" class="panel-title" >Payment Details</h3>
                </div>
                <div class="panel-body">
    
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
    
                    <form 
                            role="form" 
                            action="{{ route('stripe.post',$total) }}" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-xs-12">
                               <input type="submit" name="" value="Pay Now ">
                            </div>
                        </div>
                            
                    </form>
                </div>
            </div>        
        </div>
    </div>
        
</div>
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
   <p class="mx-auto">© 2021 All Rights Reserved By Africa Shope
   
   </p>
</div>
<div class="bg-overlay"></div>
    <script src="Home/assets/js/jquery-3.5.1.min.js"></script>
    <script src="Home/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="Home/assets/js/feather/feather.min.js"></script>
    <script src="Home/assets/js/lazysizes.min.js"></script>
    <script src="Home/assets/js/slick/slick.js"></script>
    <script src="Home/assets/js/slick/slick-animation.min.js"></script>
    <script src="Home/assets/js/slick/custom_slick.js"></script>
    <script src="Home/assets/js/price-filter.js"></script>
    <script src="Home/assets/js/ion.rangeSlider.min.js"></script>
    <script src="Home/assets/js/filter.js"></script>
    <script src="Home/assets/js/newsletter.js"></script>
    <script src="Home/assets/js/cart_modal_resize.js"></script>
    <script src="Home/assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="Home/assets/js/theme-setting.js"></script>
    <script src="Home/assets/js/script.js"></script>
    {{-- ggggggggggggggggggggggggggggggggg --}}
       <!-- jQery -->
       <script src="Home/js/jquery-3.4.1.min.js"></script>
       <!-- popper js -->
       <script src="Home/js/popper.min.js"></script>
       <!-- bootstrap js -->
       <script src="Home/js/bootstrap.js"></script>
       <!-- custom js -->
       <script src="Home/js/custom.js"></script>
       
</body>
    
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>

</script>

</html>