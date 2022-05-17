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
    <br>
    <br>
	<div class="wraper container-fluid">

		<!-- end col -->
		<div class="row">
			<div class="col-lg-12">
				<div class="">
				<div class="portlet-heading">
				<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
				Home Page</h3>
			</div>
		<form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="home_page_update">
			<div >
			@csrf
				<input type="hidden" name="id" value="1">
				<br>
				<div>
					<table class="table table-hover ms-table">
						<tr style="background:#C0C0C0">
							<th class="section-3">Name</th>
							<th class="section-1">Data</th>
							<th class="section-2">Edit</th>
						</tr>
						<tr>							<td>Welcome PURF. Paragraph</td>
							<td><p class='home'>The Horticulture Division of Panjab University always striving in its aim to make the Panjab University Campus cleaner and greener. One of the glorious examples of its untiring efforts is Prof. R.C. Paul Rose Garden in front of Vice-Chancellor&#039;s Office in Panjab Univesity. With the development of Prof. R.C. Paul Rose Garden came into existence the Panjab University Rose Festival.</p></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_page_about"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Festival Date.</td>
							<td><p class='home'>9th-11th February, 2020</p></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_date"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Festival Timing.</td>
							<td><p class='home'>4.00 pm to 6.00 pm</p></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_time"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Festival Vanue.</td>
							<td><p class='home'>Panjab University Campus</p></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_vanue"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Date of First Day</td>
							<td><p class='home'>9TH FEBRUARY, 2020</p></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/day1_date"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Date of Second Day.</td>
							<td><p class='home'>10TH FEBRUARY, 2020</p></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/day2_date"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Date of Third Day.</td>
							<td><p class='home'>11TH FEBRUARY, 2020</p></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/day3_date"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Inauguration Image.</td>
							<td><img src="{{ asset('dist/img/images/day-1.jpg')}}" style="height:40px;width:40px;"></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_inauguration_image"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Competition1 Image.</td>
							<td><img src="{{ asset('dist/img/images/day-2.jpg')}}" style="height:40px;width:40px;"></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_competition1_image"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Competition2 Image.</td>
							<td><img src="{{ asset('dist/img/images/day-3.jpg')}}" style="height:40px;width:40px;"></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_competition2_image"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Registration Text.</td>
							<td><p class='home'>To participate in the above competitions kindly click on the registration button and fill the details.</p></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_registration_text"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Gallery Img 1.</td>
							<td><img src="{{ asset('dist/uploads/gallery/g-1.jpg')}}" style="height:40px;width:40px;"></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_gallery_img1"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Gallery Img 2.</td>
							<td><img src="{{ asset('dist/uploads/gallery/g-2.jpg')}}" style="height:40px;width:40px;"></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_gallery_img2"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Gallery Img 3.</td>
							<td><img src="{{ asset('dist/uploads/gallery/g-3.jpg')}}" style="height:40px;width:40px;"></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_gallery_img3"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Gallery Img 4.</td>
							<td><img src="{{ asset('dist/uploads/gallery/g-4.jpg')}}" style="height:40px;width:40px;"></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_gallery_img4"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Gallery Img 5.</td>
							<td><img src="{{ asset('dist/uploads/gallery/g-5.jpg')}}" style="height:40px;width:40px;"></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_gallery_img5"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
						<tr>							<td>Gallery Img 6.</td>
							<td><img src="{{ asset('dist/uploads/gallery/g-6.jpg')}}" style="height:40px;width:40px;"></td>
							<td><a href="https://panchayatiduniya.com/rose-festival/home_page_update/home_gallery_img6"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
											 		</tr>
					</table>
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

