<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        @include('frontend.includes.header')
        @include('frontend.includes.css')
    </head>

    <body>

        @include('frontend.includes.starting_popup')

        @include('frontend.includes.quick_view_popup')

        @include('frontend.includes.nav_menu_v1')

        @yield('body-content')

        @include('frontend.includes.footer')

        @include('frontend.includes.script')
        
    </body>
</html>