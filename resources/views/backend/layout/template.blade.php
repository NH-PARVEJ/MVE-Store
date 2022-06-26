<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      @include ('backend.include.header')
      <!--plugins-->
      @include ('backend.include.css')
   </head>
   <body>
      <!--start wrapper-->
      <div class="wrapper">
         @include ('backend.include.topbar')
         @include ('backend.include.leftmenu')
         <!--start content-->
          @yield('body-content')
         <!--end page main-->
         <!--start overlay-->
         <div class="overlay nav-toggle-icon"></div>
         <!--end overlay-->
         <!--Start Back To Top Button-->
         <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
         <!--End Back To Top Button-->
      </div>
      <!--end wrapper-->
      @include ('backend.include.script')
   </body>
</html>