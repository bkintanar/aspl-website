<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>404 Error Page - aSPL v0.1</title>

    <meta name="description" content="404 Error Page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link href="{{URL::asset('/themes/ace/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/themes/ace/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" />

    <!-- ace styles -->
    <link href="{{URL::asset('/themes/ace/css/ace.min.css')}}" rel="stylesheet" />

    <!--[if lte IE 9]>
    <!--<link rel="stylesheet" href="assets/css/ace-part2.min.css" />-->
    <![endif]-->
    <link href="{{URL::asset('/themes/ace/css/ace-skins.min.css')}}" rel="stylesheet" />
<!--    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{URL::asset('/themes/ace/css/ace-ie.min.css')}}" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="no-skin">
<div class="main-container" id="main-container">
        <div class="page-content">
            <div class="row-fluid">
                <div class="span12">
                    <!--PAGE CONTENT BEGINS-->

                    <div class="error-container">
                        <div class="well">
                            <h1 class="grey lighter smaller">
										<span class="blue bigger-125">
											<i class="icon-sitemap"></i>
											404
										</span>
                                Page Not Found
                            </h1>

                            <hr>
                            <h3 class="lighter smaller">We looked everywhere but we couldn't find it!</h3>

                            <div>
                                <form class="form-search">
											<span class="input-icon">
												<i class="icon-search"></i>

												<input type="text" class="input-medium search-query" placeholder="Give it a search...">
											</span>
                                    <button class="btn btn-small" onclick="return false;">Go!</button>
                                </form>

                                <div class="space"></div>
                                <h4 class="smaller">Try one of the following:</h4>

                                <ul class="unstyled spaced inline bigger-110">
                                    <li>
                                        <i class="icon-hand-right blue"></i>
                                        Re-check the url for typos
                                    </li>

                                    <li>
                                        <i class="icon-hand-right blue"></i>
                                        Read the faq
                                    </li>

                                    <li>
                                        <i class="icon-hand-right blue"></i>
                                        Tell us about it
                                    </li>
                                </ul>
                            </div>

                            <hr>
                            <div class="space"></div>

                            <div class="row-fluid">
                                <div class="center">
                                    <a href="#" class="btn btn-grey">
                                        <i class="icon-arrow-left"></i>
                                        Go Back
                                    </a>

                                    <a href="/" class="btn btn-primary">
                                        <i class="icon-dashboard"></i>
                                        Dashboard
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--PAGE CONTENT ENDS-->
                </div><!--/.span-->
            </div>
        </div><!-- /.page-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/themes/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/themes/ace/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="/themes/ace/js/ace-elements.min.js"></script>
<script src="/themes/ace/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
</body>
</html>
