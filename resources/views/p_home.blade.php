@extends('layouts.layout')
@section('content')
<!-- Header Ends -->

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

            <div >
				<input type="hidden" name="id" value="1">
				<br>
				<div>

					<table class="table table-hover ms-table">
						<tr style="background:#C0C0C0">
							<th class="section-2">Name</th>
							<th class="section-3">Data</th>
							<th class="section-2">Edit</th>
						</tr>
                        <?php   $users=DB::select("Select * from headers");  ?>
                            @foreach($users as $user)
		                    <form method="POST" action="home_page_update/{{$user->url}}" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data">
			                @csrf
						<tr>
							<td>{{$user->name}}</td>
                            <td>
                                @if($user->data=="null")
                                <img src="{{asset($user->file)}}" style="height:40px;width:40px;"/>
                                @else
							    {{$user->data}}
                                @endif
                            </td>
							<td>
                                <a href="{{ $user->url }}" onclick="this.form.submit()">
                                    <i style="border-radius:50px;" class="fa fa-pencil btn btn-default"></i>
                                </a>
                            </td>
				 		</tr>
                    </form>
                    @endforeach
					</table>
                    <div class="clearfix"></div>
				</div>
			</div>

		</div>

		<!-- Page Content Ends -->
    </section>
    <!-- /.content -->
  </div>
@stop

