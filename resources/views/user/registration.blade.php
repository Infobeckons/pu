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
<title>Registration - User Dashboard</title>
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
<script src="{{url('assets/js/respond.min.js')}}"></script>
<![endif]-->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
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
			<li class="has-submenu"><a href="{{url('user_payment')}}"><i class="zmdi zmdi-receipt">
			</i><span class="nav-label">Payment</span></a>
			</li>
			<li class="active"><a href="{{url('regis')}}">
			<i class="zmdi zmdi-collection-text"></i><span class="nav-label">New Registration</span></a> </li>
						<li><a href="{{url('user_home')}}">
			<i class="zmdi zmdi-view-dashboard"></i><span class="nav-label">Account</span></a></li>

		</ul>
	</nav>
</aside>

<!-- Aside Ends-->
<!--Main Content Start -->
<?php $reg=DB::select("select * from files");?>
@foreach($reg as $registration)
@if($registration->reg_status=="ON")
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
				<span class="username"><?php echo $user->name;?></span></a><?php }?>

				</li>
				<!-- user login dropdown end -->
			</ul>
			<!-- End right navbar -->
		</nav>
	</header>
<script>
var loadFile = function(event) {
    var output = document.getElementById('previewuser');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};

jQuery(document).ready(function(){
	if(jQuery('#eventname').val()=='singing'){ $('#signingmem').css('display','block'); }
	if(jQuery('#eventname').val()=='dance'){ $('#dancemem').css('display','block'); }
	if(jQuery('#eventname').val()=='fashion'){ $('#fashionmem').css('display','block'); }
	if(jQuery('#eventname').val()=='paintingmentally'){ $('#amount').val('0'); }

	if(jQuery('#eventname').val()=='singing'){
	var countsing=jQuery('#singingmember').val();
	if(countsing=='1')
	  {
		jQuery('#amount').val('200');
		 $('#groupname').text('Name');
		 $(".danceapend").html('');

	  }
	  else
	  {
		jQuery('#groupname').text('Group Name');
		jQuery('#amount').val('400');
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');

		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countsing; i++)
		 {
		 data+='<div class="form-group" style="display:block" id="member'+i+'"><label class="col-md-4 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-2"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		  for (i = 1; i<=countmem; i++)
		  {
			$("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:c",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });

		 }
	  }
	}

	if(jQuery('#eventname').val()=='dance'){
	var countmem= jQuery('#dancemember').val();
	if(countmem=='1')
	  {
		 jQuery('#amount').val('200');
		 $('#groupname').text('Name');
		 $(".danceapend").html('');
		 $('#headfathername').text("Father Name");
		 $('#headdob').text("Date of Birth");
	  }
	  else
	  {
		 var totalmem=200;
		 jQuery('#amount').val(totalmem*countmem);
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');

		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countmem; i++)
		 {
		 data+='<div class="form-group" style="display:block" id="member'+i+'"><label class="col-md-4 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-2"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		 for (i = 1; i<=countmem; i++)
		 {
		 $("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:c",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });
		 }
	  }
	}



	jQuery('#eventname').change(function(){
	var eventName=$(this).val();
	if(eventName=='collagemaking'){ var amount=100; }
	if(eventName=='creativemehandi'){ var amount=100; }
	if(eventName=='fashion'){
	$('#fashionmem').css('display','block');
	var amount=200; }
	 else {
	$('#fashionmem').css('display','none');
    $('.danceapend').html('');
	}
	if(eventName=='dance'){
	$('#dancemem').css('display','block');
	var amount=200; }
	 else {
	$('#dancemem').css('display','none');
	jQuery('#groupname').text('Name');
    $('.danceapend').html('');
	}
	if(eventName=='facepainting'){ var amount=100; }
	if(eventName=='fancydress'){var amount=100; }
	if(eventName=='paintingmentally'){ var amount=0; }
	if(eventName=='paintingcom'){ var amount=100; }
	if(eventName=='photography'){var amount=100; }
	if(eventName=='poeticrecitation'){ var amount=100; }
	if(eventName=='rangolicom'){ var amount=100; }
	if(eventName=='roseprince'){ var amount=200; }
	if(eventName=='rosequiz'){ var amount=100; }
	if(eventName=='singing'){
	$('#signingmem').css('display','block');
	var amount=200;
	} else {
	$('#signingmem').css('display','none');
	jQuery('#groupname').text('Name');
	jQuery('#firstmember').css('display','none');
	jQuery('#secondmember').css('display','none');
	jQuery('#headfathername').text('Father Name');

	}
	if(eventName=='sloganwriting'){ var amount=100; }
	jQuery('#amount').val(amount);
	});

	jQuery('#singingmember').change(function(){
	  var countmem=$(this).val();
	  if(countmem=='1')
	  {
		jQuery('#amount').val('200');
		$('#groupname').text('Name');
		$(".danceapend").html('');
		 $('#fathernamem').css("display",'block');
		 $('#dateofbm').css("display",'block');
		 $('#ageason').css("display",'block');
	  }
	  else
	  {
		jQuery('#groupname').text('Group Name');
		jQuery('#amount').val('400');
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');

		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countmem; i++)
		 {
		 data+='<div class="form-group" style="display:block" id="member'+i+'"><label class="col-md-4 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-2"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		 for (i = 1; i<=countmem; i++)
		 {
		 $("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:c",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });
		 }

	  }
	});

	jQuery('#dancemember').change(function(){
	  var countmem=$(this).val();

	  if(countmem=='1')
	  {
		 jQuery('#amount').val('200');
		 $('#groupname').text('Name');
		 $(".danceapend").html('');
		 $('#headfathername').text("Father Name");
		 $('#headdob').text("Date of Bith");
	  }
	  else
	  {
		 var totalmem=200;
		 jQuery('#amount').val(totalmem*countmem);
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');

		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countmem; i++)
		 {
		 data+='<div class="form-group" style="display:block" id="member'+i+'"><label class="col-md-4 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-2"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		  for (i = 1; i<=countmem; i++)
		 {
		 $("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:c",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });
		 }
	  }

	});



	jQuery('#fashionmember').change(function(){
	  var countfeshmem=$(this).val();

	  if(countfeshmem=='1')
	  {
		 jQuery('#amount').val('200');
		 $('#groupname').text('Name');
		 $(".danceapend").html('');
	  }
	  else
	  {
		 var totalmem=200;
		 jQuery('#amount').val(totalmem*countfeshmem);
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');

		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countfeshmem; i++)
		 {
		 data+='<div class="form-group" style="display:block" id="member'+i+'"><label class="col-md-4 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-2"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-2"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		  for (i = 1; i<=countmem; i++)
		 {
		 $("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:c",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });
		 }
	  }

	});

	$("#datepicker1").keydown(function (event) {
    event.preventDefault();
    });

		jQuery('#submit').click(function(){
		var event=jQuery('#eventname').val();

		if(event=='no')
		{
		jQuery('#eventname').css('border','1px solid red');
		return false;
		}
		else
		{
		jQuery('#eventname').css('border','');
		}
		});

});
</script>
<style>
.declared {
  border-color: -moz-use-text-color -moz-use-text-color black;
  border-style: none none solid;
  border-width: 0 0 1px;
}
</style>




<?php $id='PURF'.mt_rand(000001,99999999);?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Trigger the modal with a button -->

  <!-- Modal -->  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="modal fade" id="myModal" role="dialog" style="background-color:white">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Image</h4>
        </div>
        <div class="modal-body">


  <div class="row">
  <div class="col-md-4 text-center">
<div id="upload-demo" style="width:350px"></div>
  </div>
  <div class="col-md-4" style="padding-top:30px;">
<strong>Select Image:</strong>
<br/>

<br/>

        <input type="file" id="upload" required="required"><br>
<button class="btn btn-success upload-result">Upload Image</button>
  </div>


  <div class="col-md-4" style="">
<div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>
  </div>
  </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
        </div>
      </div>



<section class="equal contact-box clearfix">
<div class="container" style="padding-top:55px;background-color:#FFFFFF">
<div><h4>
New Registration
</h4></div>

<form class="form-horizontal" action="{{url('regis_user')}}" enctype="multipart/form-data" method="POST">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>">

<fieldset>
<!-- Form Name -->
<legend></legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userimage">Upload Your Image </label>
  <div class="col-md-4">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Select Image</button>
  <div style="" id="previewuser" class="uploaded"></div>
  </div>
</div>
<script type="text/javascript">


$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 93,
        height: 132,
        type: 'square'
    },
    boundary: {
        width: 300,
        height: 300,
    }
});


$('#upload').on('change', function () {
var reader = new FileReader();
    reader.onload = function (e) {
    $uploadCrop.croppie('bind', {
    url: e.target.result
    }).then(function(){
    console.log('jQuery bind complete');
    });
    }
    reader.readAsDataURL(this.files[0]);
});


$('.upload-result').on('click', function (ev) {
$uploadCrop.croppie('result', {
type: 'canvas',
size: 'viewport'
}).then(function (resp) {
$.ajax({
url: "image-crop",
type: "POST",
data: {"image":resp,_token:'{{csrf_token()}}',id:'<?php echo $id;?>'},
success: function (data) {
html = '<img src="' + resp + '" />';
$("#upload-demo-i").html(html);
$(".uploaded").html(html);
}
});
});
});


</script>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="eventname">Event Name: </label>
  <div class="col-md-4">
  <select name="eventname" class="form-control input-md" id="eventname">
  <option value="no" >Select Your Event</option>
  <option value="collagemaking" >COLLAGE MAKING COMPETITION</option>
  <option value="creativemehandi">CREATIVE MEHANDI COMPETITION</option>
  <option value="dance" >DANCING COMPETITION</option>
  <option value="facepainting">FACE PAINTING</option>
  <option value="fancydress" >FANCY DRESS COMPETITION</option>
  <option value="paintingmentally">PAINTING COMPETITION For Children With Intellectual Disability (Mentally Challenged)</option>
  <option value="paintingcom">PAINTING COMPETITION</option>
  <option value="poeticrecitation" >POETIC RECITATION</option>
  <option value="rangolicom" >RANGOLI COMPETITION</option>
  <option value="roseprince" >ROSE PRINCE AND ROSE PRINCESS</option>
  <option value="rosequiz" >ROSE QUIZ</option>
  <option value="singing" >SINGING COMPETITION</option>
  <option value="sloganwriting" >SLOGAN WRITING COMPETITION</option>
  </select>

  </div>
</div>

<!----For Singing competition----->
<div class="form-group" id="signingmem" style="display:none">
  <label class="col-md-4 control-label" for="username">Number of Members</label>
  <div class="col-md-4">
  <select name="singingmember" class="form-control input-md" id="singingmember">
  <option value="">---select---</option>
    <option value="1" >SOLO</option>
  <option value="2" >DUET</option>
  </select>
  </div>
</div>

<div class="form-group" id="dancemem" style="display:none">
  <label class="col-md-4 control-label" for="dancemem">Number of Members</label>
  <div class="col-md-4">
  <select name="dancemember" class="form-control input-md" id="dancemember">
  <option value="">---select---</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="age">Amount</label>
  <div class="col-md-4">
  <input id="amount" name="amount" type="text" value="" readonly class="form-control input-md" >

  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username" id="groupname">Name</label>
  <div class="col-md-4">
  <input id="billing_name" name="billing_name" type="text" placeholder="Name" class="form-control input-md" required>

  </div>
</div>
<div class="danceapend"></div>

<!-- Text input-->
<div class="form-group" id="fathernamem">
  <label class="col-md-4 control-label" for="fathername" id="headfathername">Father's Name</label>
  <div class="col-md-4">
  <input id="fathername" name="fathername" type="text" placeholder="Father's Name" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group" id="dateofbm">
  <label class="col-md-4 control-label" for="dateofbirth" id="headdob">Date of Birth</label>
  <div class="col-md-4">
  <input id="datepicker1" name="dateofbirth" type="date" placeholder="Date of Birth" class="form-control input-md">

  </div>
</div>


<!-- Text input-->
<div class="form-group" id="ageason">
  <label class="col-md-4 control-label" for="age">Age as on 1-1-2017</label>
  <div class="col-md-4">
  <input id="age" name="age" type="text" placeholder="Age as on 1-1-2017" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="add">Address</label>
  <div class="col-md-4">
  <textarea name="billing_address" cols="62" class="form-control input-md" id="address"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="add">City</label>
  <div class="col-md-4">
  <input id="billing_city" name="billing_city" type="text" placeholder="Ciy" class="form-control input-md" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="add">State</label>
  <div class="col-md-4">
  <input id="billing_state" name="billing_state" type="text" placeholder="State" class="form-control input-md" required>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contactno">Contact Number</label>
  <div class="col-md-4">
  <input id="billing_tel" name="billing_tel" type="text" placeholder="Contact Number" maxlength="10" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->


<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
  <input id="email" name="billing_email" type="email" placeholder="Email" value="<?php echo $email;?>" class="form-control input-md" readonly="readonly">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ctry">Name of Institute</label>
  <div class="col-md-4">
  <input id="intitude" name="institute" type="text" placeholder="Name of Institute" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone</label>
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="Phone#" maxlength="10" class="form-control input-md" required="">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Training">Gender</label>
  <div class="col-md-4">
    <label class="radio-inline" for="male">
      <input type="radio" name="gender" id="Male" value="male" checked="checked">
      Male
    </label>
    <label class="radio-inline" for="female">
      <input type="radio" name="gender" id="female" value="female">
      Female
    </label>
    <label class="radio-inline" for="Transgender">
      <input type="radio" name="gender" id="Transgender" value="female">
      Transgender
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="declaration">Declaration</label>
  <div class="col-md-4">
  I <input id="declaration" name="declaration" type="text" class="declared" required="" >
  declare that particulars given above are correct and true.<br>
  I accept the conditions of schedule and competitions of the Rose Festival.
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date</label>
  <div class="col-md-4">
  <input  name="date" id="datepicker" type="date" required="">


  </div>
</div>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();

	$("#datepicker1").datepicker({
		  changeMonth:true,
              changeYear:true,
			  yearRange: "1980:2015",
                          defaultDate:"01-01-1980",
   onSelect: function(dateText, inst) {
       var date = $(this).val();
      dob = new Date(date);
      var today = new Date();
      var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
      $('#age').val(age);
   },
});

  } );


   $('#billing_tel').keyup(function () {
 this.value = this.value.replace(/[^0-9\.]/g,'');
});

$('#phone').keyup(function () {
 this.value = this.value.replace(/[^0-9\.]/g,'');
});
  </script>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="place">Place </label>
  <div class="col-md-4">
  <input id="place" name="place" type="text" required="">

  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  </div>
</div>
</fieldset>

<table width="40%" height="100" border='1' align="center">
<input type="hidden" name="tid" id="tid" readonly >
<input type="hidden" name="merchant_id" value="120962"/>
<input type="hidden" name="order_id" value="<?php echo $id;?>"/>
<input type="hidden" name="currency" value="INR"/>
<input type="hidden" name="redirect_url" value="http://www.panjabuniversityrosefestival.in/laravel/res_reg"/>
<input type="hidden" name="cancel_url" value="http://www.panjabuniversityrosefestival.in/laravel/res_reg"/>
<input type="hidden" name="language" value="EN"/>
<input type="hidden" name="billing_zip" value="141003"/>
<input type="hidden" name="billing_country" value="India"/>
<input type="hidden" name="integration_type" value="iframe_normal"/>
</table>

</form>
</div>
</section>
@else
<script type="text/javascript">
    window.location = "{{url('regs')}}";//here double curly bracket
</script>
@endif
@endforeach
@include('footer')
@else
<script type="text/javascript">
    window.location = "{{url('user_login')}}";//here double curly bracket
</script>
@endif
