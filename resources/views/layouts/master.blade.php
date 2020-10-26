<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $pageTitle ?? 'Dashboard'}} - {{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icons/Logo.png')}}"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
          href="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/iCheck/all.css') }}">
    <link rel="stylesheet"
          href="{{ asset('adminlte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminLTE.min.css') }}">

    <!-- JQuery 3.3.1 -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="{{ asset('adminlte/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('adminlte/bower_components/morris.js/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('/adminlte/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset ('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset ('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @stack('head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @yield('users')
    @include('components.footer')
</div>
@include('layouts.message')
@stack('script')
</body>
</html>
