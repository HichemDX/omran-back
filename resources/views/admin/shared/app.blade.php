<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{env('APP_NAME')}} - @yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('extra/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
        
        @if(Config::get('app.locale') == 'ar')
            <style>
                .content-wrapper{
                    direction: rtl;
                    text-align: right;
                }
                .small-box .icon > i {
                    left: 15px !important;
                    right: auto !important;;
                }
                .px-10{
                    padding-right: 100px !important;
                }
                .close {
                    margin-left: 0 !important;
                }
            </style>
        @endif
        <style>
            .card-scroll-horizontal {
                overflow: scroll !important;
                display: table !important;
                width: 100% !important;
            }
            .direction-ltr{
                direction: ltr;
            }
            .one-line{
                min-width: 95px !important;
            }
        </style>
        
        @yield('style')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">

        <div class="wrapper">
            @include('admin.shared.header')
            @include('admin.shared.sidebar')

            @yield('content')

            @include('admin.shared.footer')
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <!-- Toastr -->
        <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

       
        
        @yield('script')
    </body>
</html>