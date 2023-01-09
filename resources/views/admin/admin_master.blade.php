<!doctype html>
<html lang="vi">

<head>
    @include('admin.layouts.meta')
    @include('admin.layouts.styles')
    <title>X3 Năng Suất</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('admin.layouts.sidebar')
        <!--end sidebar wrapper -->
        <!--start header -->
        @include('admin.layouts.header')
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">

                <!-- CONTENT Ở ĐÂY -->
                @yield('content')
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!-- start footer -->
        @include('admin.layouts.footer')
        <!-- end footer -->
    </div>
    <!--end wrapper-->



    <!-- start script -->
    @include('admin.layouts.script')
    <!-- file dành cho js ở trang chủ -->
    <script type="module" src="/backend/assets/js/index.js"></script>
    @yield('script')

</body>

</html>
