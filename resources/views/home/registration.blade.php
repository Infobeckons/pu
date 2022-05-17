<title>Registration - Panjab University Rose Festival</title>
    <body class="page">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link href="{{url('resources/assets/components/imgareaselect/css/imgareaselect-default.css')}}" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="{{url('resources/assets/css/jquery.awesome-cropper.css')}}">
<?php $id='PURF'.mt_rand(000001,99999999);?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

  <!-- Trigger the modal with a button -->
@include('home/header')
<?php $reg=DB::select("select * from files");?>
@foreach($reg as $registration)
@if($registration->reg_status=="ON") 
  <!-- Modal -->  
  <script src="{{url('resources/assets/plugin/jquery.js')}}"></script>
  <script src="{{url('resources/assets/plugin/croppie.js')}}"></script>
  <link rel="stylesheet" href="{{url('resources/assets/plugin/croppie.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  

<form  action="{{url('reg')}}" enctype="multipart/form-data" method="POST" id="wdp_page_form" class="form wdp_page_form">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
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

        <input type="file" accept="image/*" id="upload" required="required">
		<h5>First you click on upload image button after then click on save button, otherwise your image will not be uploaded.</h5>
<b class="btn btn-success upload-result">Upload Image</b>
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

        <!-- PAGE -->
        <div id="page" class="site">

            <!-- SITE-HEADER -->
            <!-- END SITE-HEADER -->
            <!-- SITE-CONTENT -->
            <div id="content" class="site-content">
                <!-- PRIMARY -->
                <div id="primary" class="content-area">

                    <!-- MAIN -->
                    <main id="main" class="site-main" role="main"><br><br>

                        <!-- FEATURE IMAGE -->
                        <section class="equal contact-box clearfix">
                          <div class="container">
                            <div class="container wdp_margin_top_4 bg">

                                <h4 class="wdp_event_title text-center">Registration Form </h4>

                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8 col-sm-8">

                                        <div class="wdp_page_rsvp_inner">

<!-- Form Name -->

<!-- Text input-->
<div class="row bottom-space">
<div class="col-md-6 user-img">

  <label for="userimage">Upload Your Image: </label>  </div>
  <div class="col-md-6">
  <button type="button" class="btn wdp_submit_btn wdp_btn_inverse wdp_form_control cus" data-toggle="modal" data-target="#myModal">Select Image</button></div>
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
</div>
<!----For Singing competition----->
<div class="row">
  
<div class="col-md-6 regis-form">
  <label class="" for="eventname">Event Name: </label>  
  <select name="eventname" class="form-control wdp_form_control" id="eventname" required = "true">
	  <option value="no">Select Your Event</option>
	  <option value="collagemaking">Collage Making Competition</option>
	  <option value="creativemehandi">Creative Mehandi Competition</option>
	  <option value="dance">Dancing Competition</option>
	  <option value="facepainting">Face Painting</option>
	  <option value="fancydress">Fancy Dress Competition</option>
	  <option value="paintingmentally">Painting Competition For Children With Intellectual Disability (Mentally Challenged)</option>
	  <option value="paintingcom">Painting Competition</option>
	  <option value="poeticrecitation">Poetic Recitation</option>
	  <option value="rangolicom">Rangoli Competition</option>
	  <!---<option value="fashioncomp" >Fashion Competition</option>-->
	   <option value="roseprincess">Rose Prince & Rose Princess</option>
	  <option value="rosequiz">Rose Quiz</option>
	  <option value="singing">Singing Competition</option>
	  <option value="sloganwriting">Slogan Writing Competition</option>
     </select>    
</div>

<div class="col-md-6" id="signingmem" style="display:none">
  <label class="control-label" for="username">Number of Members</label>  
  <select  name="singingmember" class="form-control wdp_form_control" id="singingmember">
  		<option value="">---select---</option>
  	    <option value="1" >SOLO</option>
 		<option value="2" >DUET</option>
  </select>
  </div>

<div class="col-md-6" id="dancemem" style="display:none">
  <label class="control-label" for="dancemem">Number of Members</label>  
  <select name="dancemember" class="form-control wdp_form_control" id="dancemember">
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
  
  
<div class="col-md-6" id="rangolimem" style="display:none">
  <label class="control-label" for="rangolimem">Number of Members</label>  
  <select name="rangolimem" class="form-control wdp_form_control" id="rangolimemsel">
		  <option value="">---select---</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
  </select>
  </div>
  
  <div class="col-md-6" id="fashioncomshow" style="display:none">
  <label class="control-label" for="fashioncomshow">Number of Members</label>  
  <select  name="fashionmem" class="form-control wdp_form_control" id="fashioncommemsel">
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
  </select>
  </div>
  
<!---<div class="col-md-6" id="fashionmem" style="display:none">
  <label class="control-label" for="fashionmem">Number of Members</label>  
  <select name="fashionmem" class="form-control wdp_form_control" id="fashionmemsel" required>
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
  </select>
  </div>-->
  
  </div>

<div class="row">
<div class="col-md-6">
  <label class="control-label" for="age">Amount</label>  
  <input id="amount" name="amount" type="text" value="" readonly class="form-control wdp_form_control">    
  </div>
  <div class="col-md-6">
  <label class="control-label" for="username" id="groupname">Name</label>  
  <input id="billing_name" name="billing_name" type="text" placeholder="Name" class="form-control wdp_form_control" required = "true" >
</div>
</div>



<!-- Text input-->
<div class="row">
<div class="danceapend"></div>
<!-- Text input-->
<div class="col-md-6" id="fathernamem">
  <label class="control-label" for="fathername" id="headfathername">Father's Name</label>  
  <input id="fathername" name="fathername" type="text" placeholder="Father's Name" class="form-control wdp_form_control" required = "true">
</div>

<!-- Text input-->
<div class="col-md-6" id="dateofbm">
  <label class="control-label" for="dateofbirth" id="headdob">Date of Birth</label>  
  <input id="datepicker1" name="dateofbirth" type="text" placeholder="Date of Birth" class="form-control wdp_form_control">
</div>
</div>

<!-- Text input-->
<div class="row">
<div class="col-md-6" id="ageason">
  <label class="control-label" for="age">Age as on 1-1-2020</label>  
  <input id="age" name="age" type="text" placeholder="Age as on 1-1-2020" class="form-control wdp_form_control" required = "true">
</div>

<!-- Text input-->
<div class="col-md-6">
  <label class="control-label" for="add">Address</label>  
  <textarea name="billing_address" cols="62" class="form-control wdp_form_control" id="address" required = "true" ></textarea>
  </div>
</div>
<!-- Text input-->
<div class="row">
<div class="col-md-6">
  <label class="control-label" for="add">City</label>  
  <input id="billing_city" name="billing_city" type="text" placeholder="City" class="form-control wdp_form_control" required = "true" >
  </div>
<!-- Text input-->
<div class="col-md-6">
  <label class="control-label" for="add">State</label>  
  <input id="billing_state" name="billing_state" type="text" placeholder="State" class="form-control wdp_form_control" required = "true" >
  </div>
</div>


<!-- Text input-->
<div class="row">
<div class="col-md-6">
  <label class="control-label" for="contactno">Contact Number</label>  
  <input id="billing_tel" name="billing_tel" type="text" placeholder="Contact Number" maxlength="10" class="form-control wdp_form_control" required = "true" >
</div>

<!-- Text input-->

 
<div class="col-md-6">
  <label class="control-label" for="email">Email</label>  
  <input id="email" name="billing_email" type="email" placeholder="Email" class="form-control wdp_form_control" required = "true" >
  </div>
</div>

<div class="">
  <label class="control-label" for="ctry"></label>  
  <div style="color:red">
     @if(isset($email))
This email is already used. <a href="{{url('login')}}">Login</a> to new registration via single Email ID.
 @endif
  </div>
</div>

<!-- Text input-->
<div class="row">
<div class="col-md-6">
  <label for="ctry">Name of Institute</label>  
  <input id="intitude" name="institute" type="text" placeholder="Name of Institute" class="form-control wdp_form_control" required = "true" >    
</div>

<!-- Text input-->
<div class="col-md-6">
  <label for="phone">Phone</label>  
  <input id="phone" name="phone" type="text" placeholder="Phone#" maxlength="10" class="form-control wdp_form_control" required = "true" >
  </div>
</div>

<!-- Multiple Radios (inline) -->
        <div class="row">
                <div class="col-md-6">
                    <label for="Gender">Gender</label>
                        <div class="m-radio">
                        <label class="radio-inline"><input  type="radio" name="gender" id="Male" value="male" checked="checked">Male </label>
                        <label class="radio-inline"><input type="radio" name="gender" id="female" value="female">Female</label>
                        <label class="radio-inline"><input type="radio" name="gender" id="Transgender" value="female">Transgender</label>
                        </div>
                </div>
            <div class="col-md-12 dec-box">
                <label for="Declaration" class="dc-label">Declaration</label>
                    <p><p><div class="input-div"><input id="declaration" name="declaration" type="text" class="form-control wdp_form_control dec-input declared" required = "true" ></div><br>
					<p>I declare that particulars given above are correct and true. I accept the conditions of schedule and competitions of the Rose Festival.</p>
            </div>
        </div>

<!-- Text input-->
<div class="row place">
<div class="col-md-6">
  <label class="control-label" for="date">Date </label>  
  <input  name="date" id="datepicker" type="text" class="form-control wdp_form_control" required = "true" >
</div>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
	
	$("#datepicker1").datepicker({
		  changeMonth:true,
              changeYear:true,
			  yearRange: "1980:2020",
                          defaultDate:"1980-01-01",
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
<div class="col-md-6">
  <label class="control-label" for="place">Place </label>  
  <input id="place" name="place" type="text" class="form-control wdp_form_control" required = "true" >
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
<div class="row">
      <button type="submit" id="submit" name="submit" class="btn wdp_submit_btn wdp_btn_inverse wdp_form_control cust">Submit</button>
</div>
</div>


<table width="40%" height="100" border='1' align="center">
<input type="hidden" name="tid" id="tid" readonly > 
<input type="hidden" name="merchant_id" value="120962"/> 
<input type="hidden" name="order_id" value="<?php echo $id;?>"/> 
<input type="hidden" name="currency" value="INR"/> 
<input type="hidden" name="redirect_url" value="https://www.panjabuniversityrosefestival.in/res"/> 
<input type="hidden" name="cancel_url" value="https://www.panjabuniversityrosefestival.in/res"/> 
<input type="hidden" name="language" value="EN"/> 		         
<input type="hidden" name="billing_zip" value="141003"/>		         
<input type="hidden" name="billing_country" value="India"/>     
<input type="hidden" name="integration_type" value="iframe_normal"/> 
</table>
</form>
</div></div></div></div></div>
</section>
                        @else
                        	<section class="equal campus text-center">
								<div class="container">
									<div class="heading">
										<img src=""><br><br><br><br><br><br>
										<h2>Registration  Closed</h2>
									</div>
									<article>
										<div class="container">
    										<div class="row">
        										<div class="col-md-12">
        										</div>
    										</div>
										</div>
									</article>
								</div>
							</section>
						@endif
						@endforeach
                        <!-- CONTACT BAR -->
                       @include('home/footer')
                        <!-- END CONTACT BAR -->
                    </main><!-- END MAIN -->

                </div><!-- END PRIMARY -->

            </div>
            <!-- END SITE-CONTENT -->

        </div>
        <!-- END PAGE -->

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 
<script src="{{url('resources/assets/components/imgareaselect/scripts/jquery.imgareaselect.js')}}"></script> 
<script src="{{url('resources/assets/build/jquery.awesome-cropper.js')}}"></script> 
<script>
    $(document).ready(function () {
        $('#sample_input').awesomeCropper(
        { width: 150, height: 150, debug: true }
        );
    });
    </script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

        <!-- JQUERY JS -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
	
	$("#datepicker1").datepicker({
		  changeMonth:true,
              changeYear:true,
			  yearRange: "1980:2020",
                          defaultDate:"1980-01-01",
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- END JQUERY JS -->


       <!--- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>-->
		
		<script src="{{url('resources/assets/home/js/bootstrap-datepicker.js')}}"></script>

        <script >
            $(function () {
            $('#datetimepicker1 , #datetimepicker2').datepicker({
            format: "yyyy-mm-dd",     
            language: "es",
            autoclose: true,
            todayHighlight: true
            });
        </script>
							
        <script>
            $(document).on('click', '#close-preview', function(){ 
            $('.image-preview').popover('hide');
            // Hover befor close the preview
            $('.image-preview').hover(
            function () {
            $('.image-preview').popover('show');
            }, 
            function () {
            $('.image-preview').popover('hide');
            }
            );    
            });

            $(function() {
            // Create the close button
            var closebtn = $('<button/>', {
            type:"button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
            });
            closebtn.attr("class","close pull-right");
            // Set the popover default content
            $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
            });
            // Clear event
            $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse"); 
            }); 
            // Create the preview image
            $(".image-preview-input input:file").change(function (){     
            var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
            });      
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            }        
            reader.readAsDataURL(file);
            });  
            });
        </script>

        <script src="{{url('resources/assets/home/js/bootstrape485.js?ver=3.3.6')}}"></script>
        <!-- END BOOTSTRAP JS -->
		<script src="{{url('resources/assets/js/custom.js')}}"></script>
        <!-- FANCY SELECT JS -->
        <script src="{{url('resources/assets/home/js/fancySelect2fca.js?ver=1.4.0')}}"></script>
        <!-- END FANCY SELECT JS -->       
   
