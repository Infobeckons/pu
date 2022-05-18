@if(Session::get('email'))
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_4/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Feb 2018 05:20:29 GMT -->

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
<meta content="Coderthemes" name="author">
<link rel="icon" href="{{url('assets/home/images/favicon.ico')}}">
<title>Profile - User Dashboard</title>
<!-- Bootstrap core CSS -->
<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('assets/css/bootstrap-reset.css')}}" rel="stylesheet">
<!--Animation css-->
<link href="{{url('assets/css/animate.css')}}" rel="stylesheet">
<!--Icon-fonts css-->
<link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{url('assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{url('assets/material-design-iconic-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" />
<!--Morris Chart CSS -->
<!---<link href="{{url('assets/morris/morris.css')}}" rel="stylesheet">-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

<!-- sweet alerts -->
<!--<link href="{{url('assets/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">-->
<!-- Custom styles for this template -->
<link href="{{url('assets/css/style.css')}}" rel="stylesheet">
<link href="{{url('assets/css/helper.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{url('assets/jquery-datatables-editable/datatables.css')}}">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="{{url('assets/js/html5shiv.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{url('assets/js/respond.min.js')}}"></script>
<![endif]-->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>

<body>

<!-- Aside Start-->
<aside class="left-panel">
	<!-- brand -->
	<div class="logo user">
		<a class="logo-expanded" href="{{url('admin')}}">
		<i class="ion-social-buffer"></i><span class="nav-label hidden-xs">Punjab University</span> </a></div>
	<!-- / brand -->
	<!-- Navbar Start -->
	<nav class="navigation">
		<ul class="nav list-unstyled">
			<li class="has-submenu"><a href="{{url('user_payment')}}"><i class="zmdi zmdi-receipt">
			</i><span class="nav-label">Payment</span></a>
			</li>
			<li class="has-submenu"><a href="{{url('regis')}}">
			<i class="zmdi zmdi-collection-text"></i><span class="nav-label">New Registration</span></a> </li>
						<li class="active"><a href="{{url('user_home')}}">
			<i class="zmdi zmdi-view-dashboard"></i><span class="nav-label">Account</span></a></li>

		</ul>
	</nav>
</aside>
<!-- Aside Ends-->
<!--Main Content Start -->
<section class="content">
	<!-- Header -->
	<header class="top-head container-fluid">
		<button class="navbar-toggle pull-left" type="button">
		<span class="sr-only">Toggle navigation</span> <span class="icon-bar">
		</span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button>
		<!-- Search
		<form class="navbar-left app-search pull-left hidden-xs" role="search">
			<input class="form-control" placeholder="Search..." type="text">
			<a href="#"><i class="fa fa-search"></i></a>
		</form>
		Left navbar -->
		<nav class=" navbar-default" role="navigation">
			<!--<ul class="nav navbar-nav hidden-xs">
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Language
				<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="#">Hindi</a></li>
					<li><a href="#">English</a></li>
					<li><a href="#">Punjabi</a></li>
					</ul>
				</li>
			</ul>
			 Right navbar -->
			<ul class="nav navbar-nav navbar-right top-menu top-right-menu">

				<!-- user login dropdown start-->
				<li class="dropdown text-center">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
<?php
$email=Session::get('email');
$users=DB::select("Select * from users where email=?",[$email]);
foreach($users as $user){
?>
				<span class="username"><?php echo $user->name;?></span><span class="caret">
				</span></a>
				<ul class="dropdown-menu pro-menu fadeInUp animated" style="overflow: hidden; outline: none;" tabindex="5003">
					<li><a href="{{url('logout')}}"><i class="fa fa-sign-out">
					</i>Log Out</a></li>
				</ul>
				</li>
				<!-- user login dropdown end -->
			</ul>
			<!-- End right navbar -->
		</nav>
	</header>
	<!-- Header Ends -->
	<!-- Page Content Start -->
	<!-- ================== -->
	<div class="wraper container-fluid">

		<div class="portlet">
		<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
				 		Update Your Profile
				</h3>
					<br>
					<br>
		<!--<h4 class="text-uppercase" style="padding-left:10px"></h4>-->
<div class="portlet-widgets row">
<div class="col-md-4"></div>
<div class="col-md-4">
@if(isset($set))
                        <div class="alert alert-success alert-dismissable">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

Your profile updated successfully...</div>
@endif

<form action="{{url('user_update')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div><label>Name:</label><input type="text" class="form-control" value="<?php echo $user->name;?>" name="name" required="required"></div>
<div><label>Registration Id:</label><input type="text"   class="form-control"value="<?php echo $user->id;?>" readonly="readonly" name="id"></div>
<div><label>Email:</label><input type="text"   class="form-control"value="<?php echo $user->email;?>" name="email" readonly></div>
<div><label>Password:</label><input type="password"   class="form-control"value="" name="pass" placeholder="New Password" required="required"></div>
<div style="padding-top:5px"><button name="submit" class="form-control btn-info">Submit</button>
</form>
</div>
<div class="col-md-4"></div>
<?php
}
?>
				</div>
				<!--<div class="clearfix">
				</div>  -->
			</div>
		</div> </div>

	<!-- Page Content Ends -->
	<!-- ================== -->
	<!-- Footer Start -->
<footer class="footer">
<?php $footer=DB::select("select rights from header");?>
@foreach($footer as $right)
		<a href="http://www.panjabuniversityrosefestival.in" style="text-decoration:none;color:gray"><b>{{$right->rights}}</b></a>.<br>
	@endforeach
	Design & Developed by <a href="http://infobeckons.com" style="text-decoration:none;color:gray"><b>Infobeckons Technologies (P) Ltd</b></a>.
	</footer></section>
	<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{url('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>


<!-- skycons -->
        <script src="{{url('assets/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
        <script src="{{url('assets/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{url('assets/jquery-datatables-editable/datatables.editable.init.js')}}"></script>
<script src="{{url('assets/js/jquery.app.js')}}"></script>
<!-- Dashboard -->
<script src="{{url('assets/js/jquery.dashboard.js')}}"></script>
<!-- Main Content Ends -->
<!-- js placed at the end of the document so the pages load faster -->

<script type="text/javascript">
            jQuery(document).ready(function($) {
                /* Counter Up */
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };
        </script>

</body>
<!-- Mirrored from coderthemes.com/velonic_3.0/admin_4/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Feb 2018 05:20:53 GMT -->

</html>
@else
<script type="text/javascript">
    window.location = "{{url('user_login')}}";//here double curly bracket
</script>
@endif
