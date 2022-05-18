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
							<th class="section-2">Name</th>
							<th class="section-3">Data</th>
							<th class="section-2">Edit</th>
						</tr>
						<tr>
                            {{-- @foreach($users as $user) --}}
							<td>Welcome PURF. Paragraph</td>
							<td><p>
                                {{-- {{$user->home_page_about}} --}}
                            </p></td>
							<td><a href="{{url('home_page_update').'/home_page_about'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							{{-- @endforeach --}}
				 		</tr>
						{{-- <tr>@foreach($users as $user)
							<td>Festival Date.</td>
							<td><p>{{$user->home_date}}</p></td>
							<td><a href="{{url('home_page_update').'/home_date'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Festival Timing.</td>
							<td><p>{{$user->home_time}}</p></td>
							<td><a href="{{url('home_page_update').'/home_time'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Festival Vanue.</td>
							<td><p>{{$user->home_vanue}}</p></td>
							<td><a href="{{url('home_page_update').'/home_vanue'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Date of First Day</td>
							<td><p>{{$user->day1_date}}</p></td>
							<td><a href="{{url('home_page_update').'/day1_date'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Date of Second Day.</td>
							<td><p>{{$user->day2_date}}</p></td>
							<td><a href="{{url('home_page_update').'/day2_date'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Date of Third Day.</td>
							<td><p>{{$user->day3_date}}</p></td>
							<td><a href="{{url('home_page_update').'/day3_date'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Inauguration Image.</td>
							<td><img src="< echo 'uploads/gallery/'.$user->home_inauguration_image;?>" style="height:40px;width:40px;"></td>
							<td><a href="{{url('home_page_update').'/home_inauguration_image'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Competition1 Image.</td>
							<td><img src="< echo 'uploads/gallery/'.$user->home_competition1_image;?>" style="height:40px;width:40px;"></td>
							<td><a href="{{url('home_page_update').'/home_competition1_image'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Competition2 Image.</td>
							<td><img src="< echo 'uploads/gallery/'.$user->home_competition2_image;?>" style="height:40px;width:40px;"></td>
							<td><a href="{{url('home_page_update').'/home_competition2_image'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Registration Text.</td>
							<td><p>{{$user->home_registration_text}}</p></td>
							<td><a href="{{url('home_page_update').'/home_registration_text'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Gallery Img 1.</td>
							<td><img src="< echo 'uploads/gallery/'.$user->home_gallery_img1;?>" style="height:40px;width:40px;"></td>
							<td><a href="{{url('home_page_update').'/home_gallery_img1'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Gallery Img 2.</td>
							<td><img src="< echo 'uploads/gallery/'.$user->home_gallery_img2;?>" style="height:40px;width:40px;"></td>
							<td><a href="{{url('home_page_update').'/home_gallery_img2'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Gallery Img 3.</td>
							<td><img src="< echo 'uploads/gallery/'.$user->home_gallery_img3;?>" style="height:40px;width:40px;"></td>
							<td><a href="{{url('home_page_update').'/home_gallery_img3'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Gallery Img 4.</td>
							<td><img src="< echo 'uploads/gallery/'.$user->home_gallery_img4;?>" style="height:40px;width:40px;"></td>
							<td><a href="{{url('home_page_update').'/home_gallery_img4'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Gallery Img 5.</td>
							<td><img src="< echo 'uploads/gallery/'.$user->home_gallery_img5;?>" style="height:40px;width:40px;"></td>
							<td><a href="{{url('home_page_update').'/home_gallery_img5'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr>
						<tr>@foreach($users as $user)
							<td>Gallery Img 6.</td>
							<td><img src="< echo 'uploads/gallery/'.$user->home_gallery_img6;?>" style="height:40px;width:40px;"></td>
							<td><a href="{{url('home_page_update').'/home_gallery_img6'}}"><i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i></a></td>
							@endforeach
				 		</tr> --}}
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

