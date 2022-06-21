<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    

    <!-- Bootstrap -->
    <link href="{{ asset('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css?v=').time() }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css?v=" .time()integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    <!-- Font Awesome -->
    <link href="{{ asset('public/admin/vendors/font-awesome/css/font-awesome.min.css?v=').time() }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('public/admin/vendors/nprogress/nprogress.css?v=').time() }}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link
        href="{{ asset('public/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css?v=').time() }}"
        rel="stylesheet" />
    <!-- iCheck -->
    <link href="{{ asset('public/admin/vendors/iCheck/skins/flat/green.css?v=').time() }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('public/admin/build/css/custom.min.css?v=').time() }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css?v=">.time() --}}
    <link rel="stylesheet" href="{{ asset('public/fontawesome/css/all.min.css?v=').time() }}">
    @yield('css')
    {{-- <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
    </script> --}}
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- Header -->
            @include('admin.includes.header')
            <!-- Header -->

            <!-- top navigation -->
            @include('admin.includes.sidebar')
            <!-- /top navigation -->

            <!-- page content -->
            @yield('content')
            <!-- /page content -->

            <!-- footer content -->
            @include('admin.includes.footer')

            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    {{-- <script src="{{ asset('public/admin/vendors/jquery/dist/jquery.min.js?v=').time() }}"></script> --}}
    <!-- Bootstrap -->
    {{-- <script src="{{ asset('public/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js?v=').time() }}"></script> --}}
    <!-- FastClick -->
    {{-- <script src="{{ asset('public/admin/vendors/fastclick/lib/fastclick.js?v=').time() }}"></script> --}}
    <!-- NProgress -->
    {{-- <script src="{{ asset('public/admin/vendors/nprogress/nprogress.js?v=').time() }}"></script> --}}
    <!-- jQuery custom content scroller -->
    {{-- <script
        src="{{ asset('public/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js?v=').time() }}">
    </script> --}}

    <!-- iCheck -->
    {{-- <script src="{{ asset('public/admin/vendors/iCheck/icheck.min.js?v=').time() }}"></script> --}}

    <!-- Custom Theme Scripts -->
    {{-- <script src="{{ asset('public/admin/build/js/custom.min.js?v=').time() }}"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
    
    
    @yield('js')
</body>

</html>
