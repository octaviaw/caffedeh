<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('adminLTE/dist/css/AdminLTE.min.css')}}" />
    <link rel="stylesheet" href="{{asset('adminLTE/dist/css/skins/_all-skins.min.css')}}" />
    @yield('stylesheets')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('layout.header')
        @include('layout.sidebar')
        @yield('content')
    </div>
    <script src="{{ asset('adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminLTE/dist/js/adminlte.min.js') }}"></script>
    @yield('scripts')
</body>
</html>