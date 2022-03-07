 @extends('layouts.layout')
 @section('content')

 <script>
 	$(document).ready(function() {
 		var url = window.location;
 		// Will only work if string in href matches with location
 		$('ul.nav a[href="' + url + '"]').parent().addClass('active');

 		// Will also work for relative and absolute hrefs
 		$('ul.nav a').filter(function() {
 			return this.href == url;
 		}).parent().addClass('active').parent().parent().addClass('active');
 	});
 </script>

 <script type="text/javascript">
 	$(function() {
 		$('.ajax-link').click(function() {
 			$.get($(this).attr('href'), function(msg) {
 				alert("Data Saved: " + msg);
 			});
 			return false; // don't follow the link!
 		});
 	});
 </script> <!-- Header Ends -->
 <!-- Page Content Start -->
 <!-- ================== -->

 <div class="portlet">
 	@if(Session::get('success'))
 	<div class="alert alert-success">
 		{{Session::get('success')}}
 	</div>
 	@endif

 	@if(Session::get('fail'))
 	<div class="alert alert-danger">
 		{{Session::get('fail')}}
 	</div>
 	@endif
 	<div class="portlet-heading">
 		<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
 			Rose Prince & Rose Princess Competition Rules</h3>
 	</div>
 	<!-- /primary heading -->
 	{{-- <script src="https://panchayatiduniya.com/rose-festival/resources/assets/ckeditor/ckeditor.js"></script>
			<script src="https://panchayatiduniya.com/rose-festival/resources/assets/ckeditor/samples/js/sample.js"></script> --}}
 	<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
 	<script src="{{asset('ckeditor/samples/js/sample.js')}}"></script>
 	<div class="portlet-heading">

 		<div class="adjoined-bottom">
 			<div class="grid-container">
 				<div class="grid-width-100">
 					<form action="addev" method="post">
 						@csrf
 						<input type="hidden" name="id" value="11">

 						<textarea id="editor" name="editor">
						<div class="rules-competition"><img src="https://www.panjabuniversityrosefestival.in/resources/assets/home/images/top-rule.jpg" />
<h1>CONDITIONS AND GUIDELINES FOR ROSE PRINCE AND ROSE PRINCESS</h1>

<h3>Date: 10.02.2020 Time: 9.30 a.m.</h3>

<h4>Venue: Prof. R.C. Paul Rose Garden, Panjab University, Chandigarh</h4>

<ol>
	<li>The competition will start strictly at the allotted time.</li>
	<li>Registration fee of Rs. 300/- per entry and latest photograph is required.</li>
	<li>Children will be divided in three age groups-0-1 years, 1-2 years and 2-3 years, separately for Rose Prince and Rose Princess.</li>
	<li>There will be only one round to perform.</li>
	<li>One Rose Prince and one Rose Princess in each category will be the final winner.</li>
	<li>Judgement will be done on the basis of Activeness, Height, Weight, Dress, Expressions of the child.</li>
	<li>Certificates related to Vaccination/immunization will also be required for the competition as they will form a basis of judgement.</li>
	<li>For deciding the entry in each group, age of participant as on 01.01.2020 will be considered.</li>
	<li>Photocopies of Date of Birth &amp; Vaccination Record should be attached with the Entry form.</li>
	<li>Acceptance of Entry Form will be closed at 5 p.m. on 06.02.2020. On-Spot participation will not be allowed. The participants can also apply online on our website &lsquo;www.panjabuniversityrosefestival.in&rsquo;.</li>
	<li>Decision of jury will be final and binding upon all the competitors.</li>
	<li>Participants must report half an hour prior to the scheduled time of starting the event at the respective venues.</li>
	<li>If the participants are less than 5, then there will be no competition.</li>
	<li>The organizers reserve the power to cancel, postpone or change the venue of any event without assigning any reason.</li>
	<li>Acknowledgement receipt must be shown at the time of Competition.</li>
</ol>
<img src="https://www.panjabuniversityrosefestival.in/resources/assets/home/images/bottom-rule.jpg" /></div>						</textarea>
 						<br>
 						<button type="submit" name="show" class="btn btn-primary">Publish</button>

 						<!-- <button type="submit" name="update" class="btn btn-success">Update</button>
                        <button type="submit" name="delete" class="btn btn-danger">Delete &nbsp;<i class="fa fa-trash"></i></button> -->

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