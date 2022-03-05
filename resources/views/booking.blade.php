@extends('layouts.layout')
@section('content')

        <!-- /.row -->
        <!-- Main row -->
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
			 
			<form action="add" method="post">	
					@csrf
					<div class="form-group">
						<input class="form-control" name="bfs" placeholder="select pdf file" type="file">
					</div>		
					{{-- <script src="https://panchayatiduniya.com/rose-festival/resources/assets/ckeditor/ckeditor.js"></script>
					<script src="https://panchayatiduniya.com/rose-festival/resources/assets/ckeditor/samples/js/sample.js"></script> --}}
					<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
			<script src="{{asset('ckeditor/samples/js/sample.js')}}"></script>
					<div class="portlet-heading">
						
						<div class="adjoined-bottom" >
							<div class="grid-container">
								<div class="grid-width-100">
									<textarea id="editor" name="text" placeholder="Type here....."></textarea>
                 						<br>
                 						<span style="color:red">@error('text'){{$message}} @enderror</span>
                 						<br>
									<button type="submit" class="btn btn-primary">Publish</button>
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
