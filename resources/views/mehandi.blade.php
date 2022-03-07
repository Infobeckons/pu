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
			Creative Mehndi Competition Rules</h3>
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
						<input type="hidden" name="id" value="15">
						<textarea id="editor" name="editor">
						<div class="rules-competition"><img src="https://www.panjabuniversityrosefestival.in/resources/assets/home/images/top-rule.jpg" />
<h1>CONDITIONS AND GUIDELINES FOR CREATIVE MEHANDI COMPETITION</h1>

<h3>Date: 10.02.2020 Time: 2:00 p.m.</h3>

<h4>Venue: Old Convocation Ground, Panjab University, Chandigarh</h4>

<ol>
	<li>
	<ol>
		<li>The competition will start strictly at the allotted time.</li>
		<li>Entry fee will be Rs. 100/- per participant.</li>
		<li>The competition is open for School, College, University and General Public.</li>
		<li>There will be three age groups in the competition i.e. 5-12 yrs., 12-18 yrs. and 18-27yrs. However, the jury may reconstitute or merge the age groups.</li>
		<li>Self attested Photocopy of Date of Birth Proof or a certificate from the head of the institution will be required.</li>
		<li>For deciding the entry in each group, age of participant as on 01.01.2020 will be considered.</li>
		<li>Details regarding age of the participant should be correctly filled up in the form. In the event of detection of any wrong information, the competitor(s) is liable to be disqualified.</li>
		<li>Acceptance of Entry Form will be closed at 5 p.m. on 06.02.2020. On-Spot participation will not be allowed. The participants can also apply online on our website <strong>&lsquo;www.panjabuniversityrosefestival.in&rsquo;</strong>.</li>
		<li>Only first, second and third position holders in each group will be awarded.</li>
		<li>Decision of jury will be final and binding upon all the competitors.</li>
		<li>Participants must report half an hour prior to the scheduled time of starting the event at the respective venues.</li>
		<li>If the participants are less than 5, then there will be no competition.</li>
		<li>The organizers reserve the power to cancel, postpone or change the venue of any event without assigning any reason.</li>
		<li>There should be two members in a team i.e. painter and the object. There will be no age bar for the object. The object will not have to fill up the form for participation.</li>
		<li>Materials will be arranged by the participants themselves.</li>
		<li>No outside assistance will be allowed.</li>
		<li>Acknowledgement receipt must be shown at the time of Competition.</li>
	</ol>
	</li>
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