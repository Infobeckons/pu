@extends('layouts.layout')
@section('content')
<div class="wraper container-fluid">
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
	<!-- end col -->
	<div class="row">
		<div class="col-lg-12" style="background-color:white;padding-left:20px;">
			<div class="">
				<div class="">
					<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
					About Home Page</h3>
				</div>

			</div>
		</div>
	</div>
    <div class="col-md-12">
	<form action="updatepage" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
		@csrf
		<input type="hidden" name="name" value="home_page_about">
            <div class="row text-left">
				<textarea name="data" class="col-md-6" style="height:200px; border:2px solid gray"></textarea>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-2" style="float:left; margin-right:20px;">
					<button type="submit" class="btn" style="border-radius:10px; width:100px; line-height:25px;background-color:#808080;color:white"><b>Submit</b></button>
                </div>
                <div class="col-md-2">
				    <a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px; width:100px; line-height:25px;">&nbsp;Back</i></a>			</div><br>
				<div>
			</div>

			</div>
			</form>
        </div>
		</diV>
	</div>
@stop
