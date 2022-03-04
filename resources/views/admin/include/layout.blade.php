<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Education in a box</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{  URL::asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{  URL::asset('public/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{  URL::asset('public/assets/plugins/morrisjs/morris.min.css')}}" />

<!-- Custom Css -->
<link rel="stylesheet" href="{{  URL::asset('public/assets/css/main.css')}}">
<link rel="stylesheet" href="{{  URL::asset('public/assets/css/color_skins.css')}}">
   @yield('after_styles')
</head>
<body class="theme-green menu_dark">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{  URL::asset('public/assets/images/launch-icon.png')}}" width="80" height="80" alt="Oreo"></div>
        <p>Please wait. Application starting up...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
@php
  $data = Session::get('user');
@endphp
@include('admin.include.header')

@include('admin.include.sidebar')
  @yield('body')

    @include('admin.include.footer')

    @yield('after_scripts')
</body>
</html>