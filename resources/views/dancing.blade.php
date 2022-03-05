@extends('layouts.layout')
@section('content')
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
				Dancing Competition Rules</h3>
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
						<form action="addev" method="post">
						@csrf
						<input type="hidden" name="id" value="3">
						<textarea id="editor" name="editor" required = "true">
							
							@if(isset($users))
							@foreach($users as $set)
							{{$set->text}}
							@endforeach
							@endif
									{{-- {{'hey, how you doin?'}} --}}
						</textarea>	
						{{-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
							<script>
								CKEDITOR.replace( 'summary-ckeditor' );
							</script>										 --}}
						<button type="submit" name="show" class="btn btn-primary">Publish</button>
						
						<!-- <button type="submit" name="update" class="btn btn-success">Update</button>
                        <button type="submit" name="delete" class="btn btn-danger">Delete &nbsp;<i class="fa fa-trash"></i></button> -->
					</form>
						</div>
					</div>
				</div>
				<script>
	initSample();
</script>
					</div>
				</div>
			</div>
			<!-- end col --></div>
		<!-- end row --></div>
@stop
