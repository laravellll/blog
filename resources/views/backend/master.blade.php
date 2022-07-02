<!DOCTYPE html>
<html>
   
@include('backend.head')



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
@include('backend.header')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            @yield('content')
            @yield('x')
          
        </div> <!-- end row -->

    </div> <!-- container -->
               
</div> <!-- content -->

<footer class="footer text-right">
    2015 © Moltran.
</footer>

</div>

            <!-- Right Sidebar -->
@include('backend.sidebar')
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
   @include('backend.script')

	</body>
</html>