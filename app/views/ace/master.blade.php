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

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" />

    <!--ace styles-->

    <link href="{{URL::asset('themes/' .$theme. '/css/ace.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('themes/' .$theme. '/css/ace-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('themes/' .$theme. '/css/ace-skins.min.css')}}" rel="stylesheet" />

    <!-- page specific style -->
    @if(isset($controller_css))<link href="{{URL::asset('themes/' .$theme. '/css/' .$controller_css)}}" rel="stylesheet" />@endif


    <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{URL::asset('themes/' .$theme. '/css/ace-ie.min.css')}}" />
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

<ul class="nav ace-nav pull-right">
<li class="grey">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="icon-tasks"></i>
        <span class="badge badge-grey">4</span>
    </a>

    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
        <li class="nav-header">
            <i class="icon-ok"></i>
            4 Tasks to complete
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">Software Update</span>
                    <span class="pull-right">65%</span>
                </div>

                <div class="progress progress-mini ">
                    <div style="width:65%" class="bar"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">Hardware Upgrade</span>
                    <span class="pull-right">35%</span>
                </div>

                <div class="progress progress-mini progress-danger">
                    <div style="width:35%" class="bar"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">Unit Testing</span>
                    <span class="pull-right">15%</span>
                </div>

                <div class="progress progress-mini progress-warning">
                    <div style="width:15%" class="bar"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">Bug Fixes</span>
                    <span class="pull-right">90%</span>
                </div>

                <div class="progress progress-mini progress-success progress-striped active">
                    <div style="width:90%" class="bar"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                See tasks with details
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</li>

<li class="purple">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="icon-bell-alt icon-animated-bell"></i>
        <span class="badge badge-important">8</span>
    </a>

    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
        <li class="nav-header">
            <i class="icon-warning-sign"></i>
            8 Notifications
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
                    <span class="pull-right badge badge-info">+12</span>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="btn btn-mini btn-primary icon-user"></i>
                Bob just signed up as an editor ...
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
                    <span class="pull-right badge badge-success">+8</span>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
                    <span class="pull-right badge badge-info">+11</span>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                See all notifications
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</li>

<li class="green">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="icon-envelope icon-animated-vertical"></i>
        <span class="badge badge-success">5</span>
    </a>

    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
        <li class="nav-header">
            <i class="icon-envelope-alt"></i>
            5 Messages
        </li>

        <li>
            <a href="#">
                <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="themes/ace/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="themes/ace/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
            </a>
        </li>

        <li>
            <a href="#">
                See all messages
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</li>

<li class="light-blue">
    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
        <img class="nav-user-photo" src="themes/ace/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

        <i class="icon-caret-down"></i>
    </a>

    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
        <li>
            <a href="#">
                <i class="icon-cog"></i>
                Settings
            </a>
        </li>

        <li>
            <a href="#">
                <i class="icon-user"></i>
                Profile
            </a>
        </li>

        <li class="divider"></li>

        <li>
            <a href="/logout">
                <i class="icon-off"></i>
                Logout
            </a>
        </li>
    </ul>
</li>
</ul><!--/.ace-nav-->
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

<ul class="nav nav-list">
<li class={{ Request::is('*dashboard*') ? "active" : '' }} >
    <a href="dashboard">
        <i class="icon-dashboard"></i>
        <span class="menu-text"> Dashboard </span>
    </a>
</li>

<li class={{ Request::is('*proposed-list*') ? "active" : '' }} >
    <a href="proposed-list">
        <i class="icon-list"></i>
        <span class="menu-text"> Proposed-list </span>
    </a>
</li>

<li>
    <a href="typography.html">
        <i class="icon-text-width"></i>
        <span class="menu-text"> Typography </span>
    </a>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-desktop"></i>
        <span class="menu-text"> UI Elements </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="elements.html">
                <i class="icon-double-angle-right"></i>
                Elements
            </a>
        </li>

        <li>
            <a href="buttons.html">
                <i class="icon-double-angle-right"></i>
                Buttons &amp; Icons
            </a>
        </li>

        <li>
            <a href="treeview.html">
                <i class="icon-double-angle-right"></i>
                Treeview
            </a>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-double-angle-right"></i>

                Three Level Menu
                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="#">
                        <i class="icon-leaf"></i>
                        Item #1
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-pencil"></i>

                        4th level
                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <i class="icon-plus"></i>
                                Add Product
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-eye-open"></i>
                                View Products
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-edit"></i>
        <span class="menu-text"> Forms </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                Form Elements
            </a>
        </li>

        <li>
            <a href="form-wizard.html">
                <i class="icon-double-angle-right"></i>
                Wizard &amp; Validation
            </a>
        </li>

        <li>
            <a href="wysiwyg.html">
                <i class="icon-double-angle-right"></i>
                Wysiwyg &amp; Markdown
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="widgets.html">
        <i class="icon-list-alt"></i>
        <span class="menu-text"> Widgets </span>
    </a>
</li>

<li>
    <a href="calendar.html">
        <i class="icon-calendar"></i>

							<span class="menu-text">
								Calendar
								<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
									<i class="icon-warning-sign red bigger-130"></i>
								</span>
							</span>
    </a>
</li>

<li>
    <a href="gallery.html">
        <i class="icon-picture"></i>
        <span class="menu-text"> Gallery </span>
    </a>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-tag"></i>
        <span class="menu-text"> More Pages </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="profile.html">
                <i class="icon-double-angle-right"></i>
                User Profile
            </a>
        </li>

        <li>
            <a href="pricing.html">
                <i class="icon-double-angle-right"></i>
                Pricing Tables
            </a>
        </li>

        <li>
            <a href="invoice.html">
                <i class="icon-double-angle-right"></i>
                Invoice
            </a>
        </li>

        <li>
            <a href="login.html">
                <i class="icon-double-angle-right"></i>
                Login &amp; Register
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-file-alt"></i>

							<span class="menu-text">
								Other Pages
								<span class="badge badge-primary ">4</span>
							</span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="error-404.html">
                <i class="icon-double-angle-right"></i>
                Error 404
            </a>
        </li>

        <li>
            <a href="error-500.html">
                <i class="icon-double-angle-right"></i>
                Error 500
            </a>
        </li>

        <li>
            <a href="grid.html">
                <i class="icon-double-angle-right"></i>
                Grid
            </a>
        </li>

        <li>
            <a href="blank.html">
                <i class="icon-double-angle-right"></i>
                Blank Page
            </a>
        </li>
    </ul>
</li>
</ul><!--/.nav-list-->

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
    if("ontouchend" in document) document.write("<script src='themes/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="themes/ace/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<!--ace scripts-->

<script src="themes/ace/js/ace-elements.min.js"></script>
<script src="themes/ace/js/ace.min.js"></script>

<!--inline scripts related to this page-->
@if(isset($controller_js))<script src="{{URL::asset('themes/' .$theme. '/js/' .$controller_js)}}"></script>@endif
    

</body>
</html>
