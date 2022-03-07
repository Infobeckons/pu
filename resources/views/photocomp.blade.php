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
			Photography Competition Rules</h3>
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
						<input type="hidden" name="id" value="8">
						<textarea id="editor" name="editor">
						<div class="rules-competition"><img src="https://www.panjabuniversityrosefestival.in/resources/assets/home/images/top-rule.jpg" />
<h1>CONDITIONS AND GUIDELINES FOR PHOTOGRAPHY COMPETITION</h1>

<h3>Date: 10.02.2020 Time: 11.00 p.m.</h3>

<h4>Venue: Old Convocation Ground, Panjab University, Chandigarh</h4>

<h5>THEME: -</h5>

<div class="rule-theme"><strong>1. Life at Panjab University</strong><br />
<strong>2. P.U. Gardens/Landscape of P.U. Campus</strong></div>
<strong>Last Date for submission of form: 5 P.M., 05.02.2020</strong>

<ol>
	<li>Entry fee will be Rs. 100/- per application form. Two photographs can be submitted with each application form.</li>
	<li>The competition is for two categories i.e. (a) Students of Schools (b) Open category which includes students of Colleges, University Campus and General Public, they may submit their entries individually.</li>
	<li>One person can give any numbers of entries with different forms.</li>
	<li>Photograph print can be taken in colour or black and white.</li>
	<li>Edited photographs will not be accepted.</li>
	<li>Photograph with scripts or drawing such as signature and props are not accepted.</li>
	<li>Only first, second &amp; third position holders will be awarded.</li>
	<li>Decision of jury will be final and binding upon all the competitors.</li>
	<li>The entries should reach by 5 p.m. on 05.02.2020 at the Rose Festival Secretariat, Single Window Enquiry, Near Post Office, Panjab University, Sector-14, Chandigarh.</li>
	<li>If the participants are less than 5, then there will be no competition.</li>
	<li>University/Organiser has right to use the Photograph/CD.</li>
	<li>The organizers reserve the power to cancel, postpone the event without assigning any reason.</li>
	<li>The size of photographs 12x18 inches without border with soft copies of same print in CD.</li>
	<li>Soft copy in JPG format only and the size of file is not less than 1MB. CD will be the property of the Organizer.</li>
	<li>The hard copy of the winners will be the property of the Organizer. Other hard copies can be collected after 18th February 2020.</li>
	<li>Acknowledgement receipt must be shown at the time of Competition.</li>
	<li>The participant will submit the following declaration with his entries:-</li>
</ol>

<div class="declaration-rules">
<h3>Declaration</h3>
<strong>I, hereby declare that the photograph submitted is clicked by me.</strong><br />
1. I ____________________ S/D/O of Sh. ____________________ declare that the photograph submitted for the competition is clicked by myself and it is my original work.<br />
2. I have read out all the terms &amp; conditions of photograph competition and I will abide by the above mentioned terms &amp; conditions. Name: ____________________ Signature: _____________________</div>
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