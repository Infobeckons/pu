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
</script><!-- Header Ends -->
<!-- Page Content Start -->
<!-- ================== -->
<div class="wraper container-fluid">
	<!-- end col -->
	<div class="row">
		<div class="col-lg-12"  >
					<h3 class="text-uppercase" style="padding-bottom: 1%">
					Update Event Rule Title</h3>
				
				<div class="row text-center">
				<div class="col-md-4"></div>
				
				
				<form action="https://panchayatiduniya.com/rose-festival/rules_title" class="col-md-4"  method="post">
										<div class="alert alert-info  alert-dismissable" style="margin-top: 10px;">
						<button aria-hidden="true" class="close" data-dismiss="alert" type="button">
						×</button>Enter the <b>Title of Event of Rules EX(PURF 2019)...</b></div>
									@csrf
					<input class="form-control" name="title" type="text" placeholder="Enter title" required="required" style="margin-bottom:3px">
					<button class="btn btn-info submit form-control" style="margin-bottom: 15px;" type="submit">
					Submit</button>
				</form>
				
				
				<div class="col-md-4"></div>
				</div>
				
				
				<!-- /primary heading --></div>
		</div>
	</div>
</div>
@stop