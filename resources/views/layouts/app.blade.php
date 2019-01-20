



<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/adminto/menu_2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 13:27:09 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../assets/plugins/morris/morris.css">

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>

        .navbar-default {
    background-color: rgba(115,112,216,1);
    border-color: transparent;
}
.navbar-default .navbar-nav li a{
	font-size: 16px;
	color: white;
	font-family: 'Lato', sans-serif;
	margin-top:11px;
	padding-left: 27px;
	-webkit-transition: .5s; 
	-moz-transition:.5s; 
	-ms-transition:.5s; 
	-o-transition:.5s;
    transition: .5s;
}
.navbar-default.navbar-nav li a:active,
.navbar-default.navbar-nav li a:focus,
.navbar-default .navbar-nav li a:hover{
	color: #fff;
	outline: 0;
	font-weight:500;
	margin-top:12px;
	padding-bottom: 0 px;
	padding-left: 27px;

}

.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:active,
.navbar-default .navbar-nav > .active > a:focus,
.navbar-default .navbar-nav > .active > a:hover {
	background:transparent;
    color: #fff;
	font-weight:500;
	font-family: 'Lato', sans-serif;
	margin-top:12px;
	padding-bottom: 0 px;
	padding-left: 27px;
}/* navbar-default */

/* navbar-toggle*/
.navbar-default .navbar-toggle ,
.navbar-default .navbar-toggle:focus,
 .navbar-default .navbar-toggle:hover {
    background-color: transparent;
    border: 1px solid #000;
    
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #000;

}/* navbar-toggle*/

.navbar-brand{

    background-color:"white";
}
        </style>

        <script src="../assets/js/modernizr.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74137680-1', 'auto');
  ga('send', 'pageview');

</script>


    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
        <nav class="navbar navbar-default navbar-fixed-top be-top-header">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="active" href="#">Task</a>
    </div>
    <ul class="nav navbar-nav">
    <li>
                                <a href="{{url('index')}}"><i class="zmdi zmdi-home"></i> <span> Dashboard </span> </a>
                            </li>
                          
                            <li class="has-submenu">
                                <a href="{{url('blog')}}"><i class="zmdi zmdi-comment-text"></i><span>Blog </span> </a>
                                
                            </li>

                            <li class="has-submenu">
                                <a href="{{url('blog_show')}}"><i class="zmdi zmdi-view-list"></i> <span>Blog_Show </span> </a>
                                
                            </li>

                          
    </ul>
    <ul class="nav navbar-nav navbar-right">
    @if (Auth::check())
      <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
      @else
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @endif
    </ul>
  </div>
</nav>


          
            
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                


                
                </div>


<!--
<html>
<head>
<title>Laravel</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<linl type="text/css" href="{{url('css/style.css')}}" rel="stylesheet" >
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/index">64Network Security</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('create')}}">create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('blog')}}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="{{url('blog_show')}}">Blog_show</a>
      </li>
    </ul>
  </div>
</nav> <main class="py-4">-->
            @yield('content')
        </main>
    </div>

<div id="footer" class="text text-center">
<p>copyrights Nayeem</p>


</div>
</html>