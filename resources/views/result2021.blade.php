@extends('layouts.layout')
@section('content')

<script>
$(document).ready(function () {
       var url = window.location;
   // Will only work if string in href matches with location
       $('ul.nav a[href="' + url + '"]').parent().addClass('active');

   // Will also work for relative and absolute hrefs
       $('ul.nav a').filter(function () {
           return this.href == url;
       }).parent().addClass('active').parent().parent().addClass('active');
   });
</script>

<script type="text/javascript">
$(function() {
   $('.ajax-link').click( function() {
         $.get( $(this).attr('href'), function(msg) {
              alert( "Data Saved: " + msg );
         });
         return false; // don't follow the link!
   });
});
</script>	<!-- Header Ends -->
	<!-- Page Content Start -->
	<!-- ================== -->
	<div class="wraper container-fluid">
		<div class="portlet">
			<!-- /primary heading -->
			<div class="portlet-heading">
				<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
				Insert Result </h3><br>
				<div class="row">
					<div class="col-md-3 col-lg-3"></div>
					<div class="col-md-6 col-xs-12 col-lg-6">											
				    </div>
				<div class="col-md-3 col-lg-3"></div>
				</div>
				<div class="row">
					<div class="col-md-3 col-lg-3"></div>
					<div class="col-md-6 col-lg-6 col-xs-12">
					<form action="result_up" method="post" enctype="multipart/form-data">
					@csrf
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
					 <div style="margin-left:auto; margin-right:auto; text-align:center">
				 <select name="eventname" class="form-control input-md" id="eventname" required="required">
					  <option value="no" >Select Your Event</option>
					  <option value="collagemaking">COLLAGE MAKING COMPETITION</option>
					  <option value="creativemehandi">CREATIVE MEHANDI COMPETITION</option>
					  <option value="dance">DANCING COMPETITION</option>
					  <option value="facepainting">FACE PAINTING</option>
					  <option value="fancydress">FANCY DRESS COMPETITION</option>
					  <option value="paintingmentally">PAINTING COMPETITION For Children With Intellectual Disability (Mentally Challenged)</option>
					  <option value="paintingcom">PAINTING COMPETITION</option>
					  <option value="photography">PHOTOGRAPHY COMPETITION</option>
					  <option value="poeticrecitation">POETIC RECITATION</option>
					  <option value="rangolicom">RANGOLI COMPETITION</option>
					  <option value="roseprince">ROSE PRINCE AND ROSE PRINCESS</option>
					  <option value="rosequiz">ROSE QUIZ</option>
					  <option value="singing">SINGING COMPETITION</option>
					  <option value="sloganwriting">SLOGAN WRITING COMPETITION</option>
	   				  <!---<option value="fashion">FASHION COMPETITION</option>-->
	  			</select>
  <div style="padding:2px"></div>
  	<select name="selectcom" id="singing" style="display:none" class="form-control input-md">
	</select>
	<input name="id" type="text" placeholder="Participent ID" style="" class="form-control input-md" required><div style="padding:2px"></div>
	<select name="pos" style="" class="form-control input-md">
			<option>1</option>
			<option>2</option>
			<option>3</option>
	</select>
	<select name="agegroup" id="agegroup" style="display:none"  class="form-control input-md">
	</select> 
  <script>
  jQuery(document).ready(function(){
	  jQuery('#eventname').change(function(){
		$('#singing').css('display','none');
		var eventName=$(this).val();
	    if(eventName=='collagemaking' || eventName=='creativemehandi' || eventName=='poeticrecitation' || eventName=='rangolicom' || eventName=='sloganwriting')
		{   
			$('#agegroup').css('display','block');
		    $('#agegroup').html('<option value="5-12">5 to 12 Year</option><option value="12-18">12 to 18 year</option><option value="18-27">18 to 27 year</option>');	
		}
	    else if(eventName=='dance')
		{ 
			$('#agegroup').css('display','block');
		    $('#agegroup').html('<option value="3-10">3 to 10 Year</option><option value="10-15">10 to 15 year</option><option value="16-100">above 15</option>');	
		}
		else if(eventName=='facepainting')
		{
			$('#agegroup').css('display','block');
		    $('#agegroup').html('<option value="5-12">5 to 12 Year</option><option value="12-18">12 to 18 year</option><option value="18-27">18 to 27</option>');	
		}
		else if(eventName=='fancydress')
		{
			$('#agegroup').css('display','block');
		    $('#agegroup').html('<option value="3-6">3 to 6 Year</option><option value="6-9">6 to 9 year</option><option value="9-12">9 to 12</option>');	
		}else if(eventName=='paintingmentally')
		{
			$('#agegroup').css('display','block');
		    $('#agegroup').html('<option value="12-18">12 to 18 Year</option><option value="18-35">18 to 35 year</option><option value="36-100">above 35</option>');	
		}else if(eventName=='paintingcom')
		{
			$('#agegroup').css('display','block');
		    $('#agegroup').html('<option value="5-10">5 to 10 Year</option><option value="10-15">10 to 15 year</option><option value="15-30">15 to 30</option>');	
		}
		else if(eventName=='roseprince')
		{
			$('#agegroup').css('display','block');
		    $('#agegroup').html('<option value="0-1">0 to 1 Year</option><option value="1-2">1 to 2 year</option><option value="2-3">2 to 3</option>');	
		}
		else if(eventName=='singing')
		{
			$('#singing').css('display','block');
		    $('#agegroup').css('display','block');
			$('#singing').html('<option value="1">Solo</option><option value="2">Duet</option>');
		    $('#agegroup').html('<option value="5-12">5 to 12 Year</option><option value="12-18">12 to 18 year</option><option value="18-27">18 to 27 year</option>');
	  
		}
		else
		{
			$('#singing').css('display','none');
			$('#singing').html('');
		}
		
	  });
  });
  </script>	<div style="padding:5px"></div>  
  		</div>
                <button class="col-md-12 col-xs-12 col-lg-12 btn btn-primary">&nbsp;Submit</button>
                </div>
							</div>
						</div>
						<script>
							initSample();
						</script>
						<div class="clearfix">
						</div>
					</div>
			</form>
		</div>
		
		<!-- Page Content Ends -->
    </section>
    <!-- /.content -->
  </div>
@stop
