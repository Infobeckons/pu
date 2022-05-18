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
<title>Welcome To - User Dashboard</title>
<!-- Bootstrap core CSS -->
<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('assets/css/bootstrap-reset.css')}}" rel="stylesheet">
<!--Animation css-->
<link href="{{url('assets/css/animate.css')}}" rel="stylesheet">
<!--Icon-fonts css-->
<link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{url('assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{url('assets/material-design-iconic-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
<!--Morris Chart CSS -->
<link href="{{url('assets/morris/morris.css')}}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- sweet alerts -->
<link href="{{url('assets/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{url('assets/css/style.css')}}" rel="stylesheet">
<link href="{{url('assets/css/helper.css')}}" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="{{url('assets/js/html5shiv.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{url('assets/js/respond.min.js')}}"></script>
<![endif]-->
</head>

<body>

<!-- Aside Start-->
<aside class="left-panel">
	<!-- brand -->
	<div class="logo">
		<a class="logo-expanded" href="{{url('admin')}}">
		<i class="ion-social-buffer"></i><span class="nav-label hidden-xs">Punjab University</span> </a></div>
	<!-- / brand -->
	<!-- Navbar Start -->
	<nav class="navigation">
		<ul class="list-unstyled">
			<li class="active"><a href="{{url('user_payment')}}"><i class="zmdi zmdi-receipt">
			</i><span class="nav-label">Payment</span></a>
			</li>
			<li class="has-submenu"><a href="{{url('regis')}}">
			<i class="zmdi zmdi-collection-text"></i><span class="nav-label">New Registration</span></a> </li>
						<li><a href="{{url('user_home')}}">
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
				</span></a><?php }?>
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
		<h4 class="text-uppercase" style="padding-left:10px">
				Your Payment Details... </h4>
<div class="row" style="padding-left:10px">

<form class="form-horizontal" action="{{url('ccrequest')}}" enctype="multipart/form-data" method="POST">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
<table class="table table-hover ms-table">
									<thead>
										<tr>
											<th>User Register ID</th>
											<th>User Name</th>
											<th>Age</th>
											<th>Level</th>
											<th>Event Name</th>
											<th>DOB</th>
											<th>Payment Status</th>
											<th>Father Name</th>
											<th>Group Name</th>
											<th>ACK</th>
										</tr>
									</thead>
<?php
$users=DB::select("Select* from reg where billing_email=?",[$email]);?>
@foreach($users as $us)

									<tr>
										<td>{{$us->id}}</td>
										<td>{{$us->membername}}</td>
										<td>{{$us->age}}</td>
										@if($us->dancemember=="" && $us->singingmember=='')
										<td></td>
										@elseif($us->dancemember!='')
										<td>{{$us->dancemember}}</td>
										@else
										<td>{{$us->singingmember}}</td>
										@endif
										<td>{{$us->eventname}}</td>
										<td>{{$us->dateofbirth}}</td>
										@if($us->pay_status=='Success')
										<td><span class="label label-info">
										{{$us->pay_status}}</span></td>
										@else
										<td><span class="label label-danger">
										<button id="submit" class="btn-danger" value="CHECKOUT" name="submit">Checkout</button></span></td>
										@endif
										<td>{{$us->fathername}}</td>
										<td>{{$us->group_name}}</td>
										@if($us->pay_status=='Success')
										<td><a download="<?php echo $us->group_name.'.jpg';?>" href="<?php echo 'uploads/ackw2019/'.$us->id.'.png';?>" title="Acknowledgement"><i class="zmdi zmdi-cloud-download" style="font-size:25px;color:red"></i></a></td>
										@else
										<td></td>
										@endif
									</tr>




@if($us->pay_status=='Success')
			@else





				<input type="hidden" name="tid" id="tid"  readonly />

				<input type="hidden" name="merchant_id" value="168612"/>


				<input type="hidden" name="order_id" value="<?php echo $us->id;?>"/>


	<input type="hidden" name="amount" value="<?php echo $us->amount;?>"/>


				<input type="hidden" name="currency" value="INR"/>


				<input type="hidden" name="redirect_url" value="http://localhost/laravel/res_reg"/>


			 		<input type="hidden" name="cancel_url" value="http://localhost/laravel/res_reg"/>


					<input type="hidden" name="language" value="EN"/>




		      <input type="hidden" name="billing_name" value="<?php echo $us->group_name;?>"/>

		      <input type="hidden" name="billing_address" value="Room no 1101, near Railway station Ambad"/>


		       <input type="hidden" name="billing_city" value="<?php echo $us->billing_city;?>"/>


		       <input type="hidden" name="billing_state" value="<?php echo $us->billing_state;?>"/>

		       <input type="hidden" name="billing_zip" value="141003"/>


		       <input type="hidden" name="billing_country" value="India"/>


		       <input type="hidden" name="billing_tel" value="<?php echo $us->billing_tel;?>"/>


		       <input type="hidden" name="billing_email" value="<?php echo $us->billing_email;?>"/>





			<input type="hidden" name="customer_identifier" value=""/>


	<input type="hidden" name="integration_type" value="iframe_normal"/>


	@endif

@endforeach

		</form>
</table></div>
		</div>
	</div>
</div>
				</div>
				<!--<div class="clearfix">
				</div>  -->
			</div>
		</div>

	<!-- Page Content Ends -->
	<!-- ================== -->
	<!-- Footer Start -->
@include('footer')	<!-- Footer Ends -->
</section>
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

