<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu"><button type="button"
    class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i
        class="ion-close"></i></button><!-- LOGO -->
<div class="topbar-left">
    <div class="text-center bg-logo"><a href="index.html" class="logo"><i
                class="mdi mdi-bowling text-success"></i>
            Zoogler</a><!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
    </div>
</div>
<div class="sidebar-inner slimscrollleft">
    <div id="sidebar-menu">
        <ul>
            <li class="menu-title">Main</li>
            <li><a href="index.html" class="waves-effect"><i class="dripicons-device-desktop"></i>
                    <span>Dashboard <span
                            class="badge badge-pill badge-primary float-right"></span></span></a></li>

            <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                        class="dripicons-copy"></i><span> Pages </span><span class="float-right"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="pages-login.html">About Us</a></li>
                    <li><a href="pages-register.html">Footer</a></li>

                </ul>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                    class="dripicons-copy"></i><span>Product Details </span><span class="float-right"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
                <li><a href="{{ route('product.create') }}">Create Product</a></li>
                <li><a href="{{ route('product.manage') }}">Manage Product</a></li>

            </ul>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div><!-- end sidebarinner -->
</div><!-- Left Sidebar End -->
