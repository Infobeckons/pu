@extends('layouts.layout')
@section('content')
<div class="wraper container-fluid">
	<div class="page-title">
		<h3 class="title">Editable Table</h3>
	</div>
	<div class="panel">
		<div class="row-search">
			<form action="search" method="post">
				@csrf
				<div class="row">
					<div class="col-md-9 searchbar">
						<input type="text" class="form_control" name="search" placeholder="ID/Group/Phone" value="{{request()->search}}" required>
					</div>
					<div class="col-md-3 searchbut">
						<button type="submit" class="btn-info" name="submit"><i class="fa fa-search"></i></button>
					</div>
				</div>


		</div>
	</div>
	<div class="panel mt-2">
		<div class="panel-body">
			<div class="text-center" style="color:white;background-color:gray">All Data</div>
			<hr>
			@if(isset($users))

			<table class="table table-bordered table-responsive" id="datatable-editable">
				<thead>
					<tr>
						<th>PURF_ID</th>
						<th>Name</th>
						<th>Event name</th>
						<th>Group Name</th>
						<th>Membername</th>
						<th>Ack</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->PURF_ID}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->eventname}}</td>
						<td>{{$user->groupname}}</td>
						<td>{{$user->member}}</td>
						@if($user->payment=='success')
						<td><span class="label label-success">{{$user->payment}}</span></td>
						@else
						<td><span class="label label-danger">{{$user->payment}}</span></td>
						@endif
					</tr>
					@endforeach

					@if($users==null)
                    <div class="row-col" style="display:none;">
                    </div>
                    @elseif(count($users) < 1)
                    <div class="row-col" style="display:none;">
                    </div>
                    @else
					<div class="row-col">
						{{ $users->links('vendor.pagination.bootstrap-4') }}
					</div>
					<style>
						.w-5 {
							display: none;
						}
					</style>
					@endif

				</tbody>

			</table>

			@else
			<div class="text-center">
				<h2>NO DATA!</h2>
			</div>
			@endif

		</div>
	</div>
</div>

</form>
</div>

</div>

<!-- Page Content Ends -->
</section>
<!-- /.content -->
</div>
@stop