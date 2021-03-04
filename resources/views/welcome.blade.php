<!DOCTYPE html>
<html lang="es">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>SIUR | Servicios Fiscales y Tecnologicos</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/logo/icon.png" type="image/png">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
  </head>

  <body>
    
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v9.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="111644703764477"
      theme_color="#00fab2"
      logged_in_greeting="Bienvenido, en que podemos servirte?"
      logged_out_greeting="Bienvenido, en que podemos servirte?">
    </div>

    <!-- nav -->
    @include('sections.nav')

    <!-- Header -->
    @include('sections.header')

    <!-- Services Section Start -->
    @include('sections.services')



    <!-- Information Section -->
    @include('sections.information')

    <!-- Fetatures Section -->
    @include('sections.feature')
 
    <!-- Team section -->
    @include('sections.team')

    <!-- Contact Section -->
    @include('sections.contact')

    <!-- Footer Section -->
    @include('sections.footer')

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('js/jquery-min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>      
    <script src="{{ asset('js/jquery.nav.js') }}"></script>    
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>    
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>     
    <script src="{{ asset('js/nivo-lightbox.js') }}"></script>     
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>     
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>   
    <script src="{{ asset('js/main.js') }}"></script>
    
  </body>
</html>