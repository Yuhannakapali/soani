<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    @yield('title')
    @include('frontend.layout.stylesheet')
    
  </head>
  <body>
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
