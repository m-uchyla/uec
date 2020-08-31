<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Underground Esport Cup </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="manifest" href="site.webmanifest">-->
    
    @yield('style')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('resources/main/img/favicon.png', true) }}">
    @include('css')
    <script data-ad-client="ca-pub-9696942259354560" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body onload="cookie();">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('resources/main/img/logo/loder.png', true) }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
@include('header')
    <!-- header end -->
    <main>
@include('slider')

@yield('content')
    </main>
        
    
    @include('footer')
    <div class='cookie-banner' id='cookie-banner' style='display: none'>
<p>
    Używając naszej strony zgadzasz się na 
    <a href='insert-link'> używanie ciasteczek</a>
  </p>
<button class='close-cookie' id='close-cookie'>&times;</button>
</div>

    <!-- Scroll Up -->
    <!-- <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div> -->
<script>
  function cookie() {
    if (localStorage.getItem('cookieSeen') != 'shown') {
      document.getElementById('cookie-banner').delay(2000).fadeIn();
      localStorage.setItem('cookieSeen','shown')
    };

    document.getElementById('.close-cookie').click(function() {
      document.getElementById('.cookie-banner').fadeOut();
    })
  };
</script>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="1807658476227962"
        theme_color="#ff1f1f"
        logged_in_greeting="Cześć! Jak możemy Ci pomóc?"
        logged_out_greeting="Cześć! Jak możemy Ci pomóc?">
      </div>

    @include('js')

    @yield('script')
    
    </body>
</html>