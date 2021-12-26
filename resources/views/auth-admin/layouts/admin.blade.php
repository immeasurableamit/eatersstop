<!doctype html>
<html>
<head>
   @include('auth-admin.includes.head')
</head>
  <body>

    <div id="preloader">
      <div class="gooey">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    
     <header>
        @include('auth-admin.includes.header')
     </header>
        @include('auth-admin.includes.left')
      <div class="content-body">
            <!-- row -->
        <div class="container-fluid">
          @include('flash-message')
          @yield('content')
        </div>
      </div>

     <footer>
         @include('auth-admin.includes.footer')
     </footer>

  </body>
</html>