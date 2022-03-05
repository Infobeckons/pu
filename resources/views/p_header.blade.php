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
		<!-- end col -->
		<div class="row">
			<div class="col-lg-12">
				<div class="portlet">
					<div class="portlet-heading">
						<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
						Header manager</h3>
					</div>
					<!-- /primary heading --><br>
					<div >
			@csrf
				<input type="hidden" name="id" value="1">
				<br>
				<div>
					<table class="table table-hover ms-table">
						<tr style="background:#C0C0C0">
							<th class="section-2">Name</th>
							<th class="section-9">Data</th>
							<th class="section-1">Edit</th>
						</tr>
						<tr>
																<td>Event icon</td>
									<td><img src="uploads/gallery/logo-2.png" style="height:40px;width:40px;"></td>
									<td><a href="https://panchayatiduniya.com/rose-festival/head_update/icon"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>						
				 							 		</tr>
						<tr>
																<td>Background Image</td>
									<td><img src="uploads/gallery/head-bg.jpg" style="height:40px;width:40px;"></td>
									<td><a href="https://panchayatiduniya.com/rose-festival/head_update/back"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>						
				 							 		</tr>
						<tr>
																<td>Marquee Text</td>
									<td><p  class="home">Registration Closed ---- For more information call on : 99140-03004, 98148-93401, 99145-27023, 0172-2534365.</p></td>
									<td><a href="https://panchayatiduniya.com/rose-festival/head_update/marq"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>						
				 							 		</tr>
						<tr>
																<td>university Rights</td>
									<td><p class="home">© 2017 - 20 PU Rose Festival. All Rights Reserved.</p></td>
									<td><a href="https://panchayatiduniya.com/rose-festival/head_update/rights"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>						
				 							 		</tr>
					</table>
	           </div>
	         </div>
			</div>
		</div>
	</div><br>
</div>
	</div>
@stop