<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>SERTEXPERT</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="personal, portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{env('APP_URL')}}css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{env('APP_URL')}}css/colors/red.css"/>
    <link rel="stylesheet" href="{{env('APP_URL')}}css/style.css?122"/>
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/remodal.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/remodal-default-theme.css">



    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet">

    <!-- Font icons -->
    <link rel="stylesheet" href="{{env('APP_URL')}}icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
<div id="app">
    @yield('content')
</div>

<script type="text/javascript" src="{{env('APP_URL')}}js/app.js?122"></script>
<script src="{{env('APP_URL')}}js/jquery-2.1.4.min.js"></script>
<script src="{{env('APP_URL')}}js/remodal.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}js/rotate3Di-master/jquery-css-transform/j-c-t.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}js/rotate3Di-master/rotate3Di.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
<script src="{{env('APP_URL')}}js/typed.js"></script>
<script src="{{env('APP_URL')}}js/particles.js"></script>
<script src="{{env('APP_URL')}}js/app-particels.js"></script>
<script src="{{env('APP_URL')}}js/jquery.hover3d.js"></script>
<script src="{{env('APP_URL')}}js/coockie.js"></script>
<script src="{{env('APP_URL')}}js/main.js?12222"></script>
<script src="{{env('APP_URL')}}js/animatedModal.js"></script>

</body>
</html>
