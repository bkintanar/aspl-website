<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<!--[if gt IE 9]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{$page}} - aSPL v0.1</title>

    <!-- Library CSS // Start -->
    <link rel="stylesheet" href="{{URL::asset('themes/' .$theme. '/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('themes/' .$theme. '/css/bootstrap-theme.min.css')}}">
    <!-- Library CSS // End -->

    @if (isset($controller_css))<!-- Load controller specific css -->
    <link rel="stylesheet" href="{{URL::asset('themes/' .$theme. '/css/'.$controller_css.'')}}">
    @endif
</head>
<body>
    @yield('content')
    <!-- The Scripts // Start -->
    <script src="{{URL::asset('themes/' .$theme. '/js/jquery-2.1.0.min.js')}}"></script>
    <script src="{{URL::asset('themes/' .$theme. '/js/bootstrap.min.js')}}"></script>

    @if (isset($controller_js))<!-- Load controller specific js -->
    {{ HTML::script("themes/{$theme}/js/{$controller_js}") }}
    @endif
    <!-- The Scripts // End -->
</body>
