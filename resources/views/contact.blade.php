@extends('layouts.layout')
@section('content')

	<!-- ================== -->
	<div class="wraper container-fluid">
		<!-- end col -->
		<div class="row">
		<div class="col-lg-12">
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
						Contact form</h3>
					</div>					
					<!-- /primary heading --><br>
					<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
							<form action="addcontact" method="post">
							@csrf
							@if(isset($user))
							@foreach($user as $value)
							<input type="hidden" name="id" value="1"/>
							
								<div class="form-group">
								<label>Contact 1</label>
									<input class="form-control" name="c1" type="text" value="{{ $value->contact1}}" placeholder="Phone no." maxlength="12" required="">
								</div>
								
								<div class="form-group">
								<label>Contact 2</label>
									<input class="form-control" name="c2" type="text" value="{{ $value->contact2}}" placeholder="Mobile number" maxlength="12" required="">
								</div>

								<div class="form-group">
								<label>Contact 3</label>
									<input class="form-control" name="c3" type="text" value="{{ $value->contact3}}" placeholder="Mobile number" maxlength="12" required="">
								</div>

								<div class="form-group">
								<label>E-mail</label>
									<input class="form-control" name="email" type="email" value="{{ $value->email}}" placeholder="example@gmail.com" required="">
								</div>
	
								<div class="form-group">
								<label>Facebook Link</label>
									<input class="form-control" name="link" type="url" value="{{ $value->social}}" placeholder="https://Facebook_url..." required="">
								</div>
	
								<div class="form-group">
								<label>Address</label>
								<textarea  class="form-control" name="add" placeholder="Address" required="">{{ $value->address}}</textarea>
								</div>

								@endforeach
								@endif

								<div class="form-group">	
									<button class="form-control btn btn-primary" type="submit" value="Update">Update</button>
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

