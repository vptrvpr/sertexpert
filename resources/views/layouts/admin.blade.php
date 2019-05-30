<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SertExpert - Admin</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ env('APP_URL') }}/css/app.css" rel="stylesheet">
    <!-- Required meta tags -->

    <link rel="stylesheet" href="{{ env('APP_URL') }}/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/css/admin/style.css?1213">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/remodal.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/remodal-default-theme.css">
</head>
<body>
<div id="app">
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="{{ env('APP_URL') }}/vendors/js/vendor.bundle.base.js"></script>
<script src="{{ env('APP_URL') }}/vendors/js/vendor.bundle.addons.js"></script>
<script src="{{ env('APP_URL') }}/js/admin/off-canvas.js"></script>
<script src="{{ env('APP_URL') }}/js/admin/misc.js"></script>
<script src="{{ env('APP_URL') }}/js/admin/dashboard.js"></script>
<script src="{{ env('APP_URL') }}/js/app.js?12323"></script>
</body>
</html>
