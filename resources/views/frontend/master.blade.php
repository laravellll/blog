<!DOCTYPE html>
<html class="no-js" lang="en">

    @include('frontend.head')

    <body class="body-class">
        <!-- pr-loder-area area start here  -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
      
        <!-- pre-loder-area area start here  -->
        <!-- header area start here  -->
    @include('frontend.header')

        <!-- offcanvase menu area start here  -->
        @yield('x')
        <!--main/middle/body-->
        


        <!-- footer area start here  -->
       @include('frontend.footer')
    </body>
</html>
