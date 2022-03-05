{{-- @if(Session::get('admin'))
@include('header') --}}
@extends('layouts.layout')
@section('content')

	<div class="wraper container-fluid">
		
		<!-- end col -->
		<div class="row">
			<div class="col-lg-12" style="background-color:white">
				<div class="">
				<div class="">
				<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
				8<sup class="text-lowercase">th </sup>Rose Festival</h3>
			</div>
			<div>
			</div><br>
			<div>		</div></div></div>
				 <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="{{url('upur-1')}}">
			<div style="background-color:white">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
				<input type="hidden" name="id" value="8">
				<div class="row">
				<div class="col-md-6">
				<input type="text" class="form-control" name="event_name" placeholder="Enter new title">
				</div><div class="col-md-6">
				<input type="file" class="form-control col-md-6" name="images[]" placeholder="images" multiple>
				</div></div><br>
				<div>
				<table class="table table-hover ms-table">
				<tr style="background:#C0C0C0">
				<th class="col-md-4">Images</th>
				<th class="col-md-1">Edit</th>
				<th class="col-md-1">Delete</th>
				</tr>
				@if(isset($success))
				@foreach($success as  $use)
				<tr>
				<td><img src="<?php echo '/uploads/purf_gallery/'.$use->images;?>" class="img-circle" style="height:40px;width:40px;"></td>
				<td><a href="{{url('pur_update').'/'.$use->images}}"><i class="btn btn-info" style="border-radius:15px;"><i class="ion ion-edit"></i></i></a></td>
				<td><a href="{{url('delete_pur').'/'.$use->images}}"><i class="btn btn-danger" style="border-radius:15px;"><i class="ion ion-trash-b"></i></i></a></td>
				</tr>
				@endforeach
				@endif
				@if(isset($users))
				@foreach($users as  $user)
				<tr>
				<td><img src="<?php echo '/uploads/purf_gallery/'.$user->images;?>" class="img-circle" style="height:40px;width:40px;"></td>
				<td><a href="{{url('pur_update').'/'.$user->images}}"><i class="btn btn-info" style="border-radius:15px;"><i class="ion ion-edit"></i></i></a></td>
				<td><a href="{{url('delete_pur').'/'.$user->images}}"><i class="btn btn-danger" style="border-radius:15px;"><i class="ion ion-trash-b"></i></i></a></td>
				</tr>
				@endforeach
				@endif
				</table>
				</div></div><br><br><span>
				<div class="row">
				<div class="col-md-2">
				<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
				@if(isset($success))
				<div class="col-md-10">
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <div style="border-radius:15px;height:15px;">Your Information updated successfully....</div></div></div>
				@endif
				</div>
				</span>	
				</form>
				</div>
				</div><br><br>
				@stop
{{-- @include('footer')

@else
<script type="text/javascript">
    window.location = "{{url('admin')}}";//here double curly bracket
</script>
@endif --}}

