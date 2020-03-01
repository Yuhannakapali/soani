<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>


    @yield('tag')
    
    @yield('title')
    
    @include('frontend.layout.stylesheet')
    
  </head>
  <body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v6.0'
        });
      };
      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Your customer chat code -->
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="320541588301342"
      theme_color="#0F0B53"
      logged_in_greeting="Hi! How can we help you?"
      logged_out_greeting="Hi! How can we help you?">
    </div>
    {{-- loading loader  --}}
    {{-- <div id="loading">
      <div id="loading-center">
        <img src="images/loader.gif" alt="loder" />
      </div>
    </div> --}}
    @include('frontend.layout.header')
      @yield('content')      
    @include('frontend.layout.footer')  
    @include('frontend.layout.javascript')
  </body>
</html>
