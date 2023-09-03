<!DOCTYPE html>
<html lang="en">

<head>
    @include('adminpanel.includes.header')

    @include('adminpanel.includes.css')
</head>

<body class="fixed-left"><!-- Loader -->
    @include('adminpanel.includes.preloader')
    <!-- Begin page -->
    <div id="wrapper">
        @include('adminpanel.includes.leftsidebar')
        <!-- Start right Content here -->
        <div class="content-page"><!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                @include('adminpanel.includes.topbar')
                <!-- Top Bar End -->
                @yield('body-content')
            </div><!-- content -->
            <footer class="footer">hhh</footer>
        </div><!-- End Right content here -->
    </div><!-- END wrapper --><!-- jQuery  -->
    @include('adminpanel.includes.script')
</body>

</html>
