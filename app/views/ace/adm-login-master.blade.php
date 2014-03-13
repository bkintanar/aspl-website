<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{$page}} - aSPL v0.1</title>

    <meta name="description" content="{{$page_description}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--basic styles-->

    <link href="{{URL::asset('themes/' .$theme. '/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('themes/' .$theme. '/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('themes/' .$theme. '/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="{{URL::asset('themes/' .$theme. '/css/font-awesome-ie7.min.css')}}" />
    <![endif]-->

    <!--page specific plugin styles-->

    <!--fonts-->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

    <!--ace styles-->

    <link rel="stylesheet" href="{{URL::asset('themes/' .$theme. '/css/ace.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('themes/' .$theme. '/css/ace-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('themes/' .$theme. '/css/ace-skins.min.css')}}" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{URL::asset('themes/' .$theme. '/css/ace-ie.min.css')}}" />
    <![endif]-->

    <!--inline styles related to this page-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="login-layout">
@yield('content')

<!--basic scripts-->

<!--[if !IE]>-->
<!--<script src="{{URL::asset('themes/' .$theme. '/js/jquery-2.1.0.min.js')}}"></script>-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<!--<![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='themes/ace/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='themes/ace/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='themes/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="themes/ace/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<!--ace scripts-->

<script src="themes/ace/js/ace-elements.min.js"></script>
<script src="themes/ace/js/ace.min.js"></script>

<!--inline scripts related to this page-->

<script type="text/javascript">
    function show_box(id) {
        $('.widget-box.visible').removeClass('visible');
        $('#'+id).addClass('visible');
    }
</script>
</body>
</html>
