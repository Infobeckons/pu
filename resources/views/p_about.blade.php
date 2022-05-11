
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
				About us Page</h3>
			</div>
					<!-- /primary heading -->
					{{-- <script src="https://panchayatiduniya.com/rose-festival/resources/assets/ckeditor/ckeditor.js"></script>
			<script src="https://panchayatiduniya.com/rose-festival/resources/assets/ckeditor/samples/js/sample.js"></script> --}}
			<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
			<script src="{{asset('ckeditor/samples/js/sample.js')}}"></script>
			<div class="portlet-heading">
				 
				<div class="adjoined-bottom" >
					<div class="grid-container">
						<div class="grid-width-100">
						<form action="https://panchayatiduniya.com/rose-festival/page_about" method="post" enctype="multipart/form-data">
						@csrf
												<textarea id="editor" name="editor">
												<p>The Horticulture Division of Panjab University is always striving in its aim to make the Panjab University Campus cleaner and greener. One of the glorious examples of its untiring efforts is Prof. R.C. Paul Rose Garden in front of Vice-Chancellor&#39;s Office in Panjab Univesity. With the development of Prof. R.C. Paul Rose Garden came into existence the Panjab University Rose Festival. The festival has successfully seen seven editions under the patronage of Hon&#39;ble Vice-Chancellor, Panjab University. The festival was started with the aim to spread the message of a healthy environment to the people and also provide a platform to the people to showcase their talent through various competitions like singing, dancing, painting, mehandi, slogan writing, face painting, flower Rose Prince &amp; Rose Princess, etc. The festival over the years has seen huge participation from general public and students of universities, colleges and schools. With passage of time, the festival has become a landmark event not only for Panjab University but for tricity as well.</p>

<p>&nbsp;</p>

<h4>Er. Anil Thakur</h4>

<h4>Divisional Engineer (Horticulture) cum Organiser</h4>

<h4>Panjab University, Rose Festival</h4>												</textarea>
																		<hr>
						<div class="row">
						    <div class="col-md-3">
						        	<img src="{{ asset('dist/uploads/gallery/pu-about.jpg')}}" class="img-circle" style="height:40px;width:40px">
						        <input type="hidden" name="old_img" value="pu-about.jpg">
						        </div>
						    <div class="col-md-3">
						        <input type="file" class="btn btn-primary" name="image">
						    </div>
						</div><hr>
						<button type="submit" name="show" class="btn btn-primary">Publish</button>
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
