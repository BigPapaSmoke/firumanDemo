<!DOCTYPE html>
<html lang="en">

<head>
    <x-backend.headScripts />
</head>

<!-- body start -->

<body data-layout-mode="default" data-theme="dark" data-topbar-color="dark" data-menu-position="fixed"
    data-leftbar-color="dark" data-leftbar-size='dark' data-sidebar-user='false'>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        @include('body.header')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('body.sidebar')
        <!-- Left Sidebar End -->

        <div class="content-page">
            @yield('admin')
            <!-- content -->

            <!-- Footer Start -->
            @include('body.footer')
            <!-- end Footer -->

        </div>
    </div>
    <x-backend.footScripts />
</body>

</html>
