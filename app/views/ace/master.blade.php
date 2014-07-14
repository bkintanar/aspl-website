<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{$page}} - aSPL v0.1</title>

    <meta name="description" content="{{$page_description}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--basic styles-->

    <link href="{{URL::asset('/themes/' .$theme. '/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/themes/' .$theme. '/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/themes/' .$theme. '/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="{{URL::asset('/themes/' .$theme. '/css/font-awesome-ie7.min.css')}}" />
    <![endif]-->

    <!--page specific plugin styles-->

    <!--fonts-->

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" />

    <!--ace styles-->

    <link href="{{URL::asset('/themes/' .$theme. '/css/ace.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/themes/' .$theme. '/css/ace-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/themes/' .$theme. '/css/ace-skins.min.css')}}" rel="stylesheet" />

    <!-- page specific style -->
    @if(isset($controller_css))<link href="{{URL::asset('/themes/' .$theme. '/css/' .$controller_css)}}" rel="stylesheet" />@endif


    <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{URL::asset('/themes/' .$theme. '/css/ace-ie.min.css')}}" />
    <![endif]-->

    <!--inline styles related to this page-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="navbar">
<div class="navbar-inner">
<div class="container-fluid">
<a href="#" class="brand">
    <small>
        <i class="icon-leaf"></i>
        automatedSPL
    </small>
</a><!--/.brand-->

@include($theme.'._includes.nav')<!--/.ace-nav-->
</div><!--/.container-fluid-->
</div><!--/.navbar-inner-->
</div>

<div class="main-container container-fluid">
<a class="menu-toggler" id="menu-toggler" href="#">
    <span class="menu-text"></span>
</a>

<div class="sidebar" id="sidebar">
<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-small btn-success">
            <i class="icon-signal"></i>
        </button>

        <button class="btn btn-small btn-info">
            <i class="icon-pencil"></i>
        </button>

        <button class="btn btn-small btn-warning">
            <i class="icon-group"></i>
        </button>

        <button class="btn btn-small btn-danger">
            <i class="icon-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div><!--#sidebar-shortcuts-->

{{Navlink::generate()}}
<!--/.nav-list-->

<div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left"></i>
</div>
</div>

<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
            </li>
            <li class="active">{{$page}}</li>
        </ul><!--.breadcrumb-->
        <div class="nav-search" id="nav-search">
            <form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
            </form>
        </div><!--#nav-search-->
    </div>

    <div class="page-content">
        <div class="page-header position-relative">
            <h1>
                {{$page}}
                <small>
                    <i class="icon-double-angle-right"></i>
                    {{$page_descrption_small}}
                </small>
            </h1>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

                @yield('content')

                <!--PAGE CONTENT ENDS-->
            </div><!--/.span-->
        </div><!--/.row-fluid-->
    </div><!--/.page-content-->
</div><!--/.main-content-->
</div><!--/.main-container-->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>

<!--basic scripts-->

<!--[if !IE]>-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<!--<![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='/themes/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/themes/ace/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<!--ace scripts-->

<script src="/themes/ace/js/ace-elements.min.js"></script>
<script src="/themes/ace/js/ace.min.js"></script>

<!--inline scripts related to this page-->
@if(isset($controller_js))<script src="{{URL::asset('/themes/' .$theme. '/js/' .$controller_js)}}"></script>@endif
    

</body>
</html>
