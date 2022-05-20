@extends('layouts.layout')
@section('content')

@if(isset($users))
@foreach($users as $user)
	@if($user->url=='home_page_about')
	<div class="wraper container-fluid">
	    <!-- end col -->
		<div class="row">
			<div class="col-lg-12" style="background-color:white;padding-left:20px;">
				<div class="">
					<div class="">
						<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
						About Home Page</h3>
					</div>
					<div>
					<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
					<div>
					</div>
				</div>

			<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <input type="hidden" name="id" value="{{$user->id}}">
                <input type="hidden" name="url" value="{{$user->url}}">
				<input type="hidden" name="name" value="{{$user->name}}">

					<div class="row text-left">
						<textarea name="data" class="col-md-6" style="height:200px; border:2px solid gray">{{$user->data}}</textarea>
					</div>
				<br><br>
				<div class="row">
					<div class="col-md-2">
						<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button>
                    </div>
 				</div>
				</div>
			</form>
            </div>
		</diV>
	</div>

    @endif


@if($user->url=='home_date')
	<div class="wraper container-fluid">

		<!-- end col -->
		<div class="row">
			<div class="col-lg-12" style="background-color:white;padding-left:20px;">
				<div class="">
					<div class="">
						<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
						Festival Date.</h3>
					</div>
					<div>
					<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
					<div>
					</div>
				</div>

			<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <input type="hidden" name="id" value="{{$user->id}}">
				<input type="hidden" name="url" value="{{$user->url}}">
				<input type="hidden" name="name" value="{{$user->name}}">
					<div class="row text-left">
						<textarea name="data" class="col-md-6" style="height:30px; border:2px solid gray;padding-top:3px"><?php echo $user->data; ?></textarea>
					</div>

				<br><br>
				<div class="row">
					<div class="col-md-2">
						<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
				</div>
				</div>
			</form>
        </div>
		</diV>
	</div>
	@endif

@if($user->url=='home_time')
	<div class="wraper container-fluid">

		<!-- end col -->
		<div class="row">
			<div class="col-lg-12" style="background-color:white;padding-left:20px;">
				<div class="">
					<div class="">
						<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
						Festival Timing.</h3>
					</div>
					<div>
					<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
					<div>
					</div>
				</div>

			<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <input type="hidden" name="id" value="{{$user->id}}">
				<input type="hidden" name="url" value="{{$user->url}}">
				<input type="hidden" name="name" value="{{$user->name}}">


					<div class="row text-left">
						<textarea name="data" class="col-md-6" style="height:30px; border:2px solid gray;padding-top:3px"><?php echo $user->data;?></textarea>
					</div>

				<br><br>
				<div class="row">
					<div class="col-md-2">
						<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
				</div>
				</div>
			</form>
        </div>
		</diV>
	</div>
		@endif

@if($user->url=='home_vanue')
	<div class="wraper container-fluid">

		<!-- end col -->
		<div class="row">
			<div class="col-lg-12" style="background-color:white;padding-left:20px;">
				<div class="">
					<div class="">
						<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
						Festival Vanue.</h3>
					</div>
					<div>
					<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
					<div>
					</div>
				</div>

			<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <input type="hidden" name="id" value="{{$user->id}}">
				<input type="hidden" name="url" value="{{$user->url}}">
				<input type="hidden" name="name" value="{{$user->name}}">

					<div class="row text-left">
						<textarea name="data" class="col-md-6" style="height:30px; border:2px solid gray;padding-top:3px"><?php echo $user->data;?></textarea>
					</div>

				<br><br>
				<div class="row">
					<div class="col-md-2">
						<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
				</div>
				</div>
			</form>
        </div>
		</diV>
	</div>
		@endif

@if($user->url=='day1_date')
	<div class="wraper container-fluid">

		<!-- end col -->
		<div class="row">
			<div class="col-lg-12" style="background-color:white;padding-left:20px;">
				<div class="">
					<div class="">
						<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
						Date of First Day</h3>
					</div>
					<div>
					<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
					<div>
					</div>
				</div>

			<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <input type="hidden" name="id" value="{{$user->id}}">
				<input type="hidden" name="url" value="{{$user->url}}">
				<input type="hidden" name="name" value="{{$user->name}}">

					<div class="row text-left">
						<textarea name="data" class="col-md-6" style="height:30px; border:2px solid gray;padding-top:3px"><?php echo $user->data;?></textarea>
					</div>
				<br><br>
				<div class="row">
					<div class="col-md-2">
						<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
				</div>
				</div>
			</form>
        </div>
		</diV>
	</div>
		@endif

@if($user->url=='day2_date')
	<div class="wraper container-fluid">

		<!-- end col -->
		<div class="row">
			<div class="col-lg-12" style="background-color:white;padding-left:20px;">
				<div class="">
					<div class="">
						<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
						Date of Second Day</h3>
					</div>
					<div>
					<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
					<div>
					</div>
				</div>

			<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <input type="hidden" name="id" value="{{$user->id}}">
				<input type="hidden" name="url" value="{{$user->url}}">
				<input type="hidden" name="name" value="{{$user->name}}">

					<div class="row text-left">
						<textarea name="data" class="col-md-6" style="height:30px; border:2px solid gray;padding-top:3px"><?php echo $user->data;?></textarea>
					</div>

				<br><br>
				<div class="row">
					<div class="col-md-2">
						<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
				</div>
				</div>
			</form>
        </div>
		</diV>
	</div>
		@endif
@if($user->url=='day3_date')
	<div class="wraper container-fluid">

		<!-- end col -->
		<div class="row">
			<div class="col-lg-12" style="background-color:white;padding-left:20px;">
				<div class="">
					<div class="">
						<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
						Date of Third Day</h3>
					</div>
					<div>
					<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
					<div>
					</div>
				</div>

			<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <input type="hidden" name="id" value="{{$user->id}}">
				<input type="hidden" name="url" value="{{$user->url}}">
				<input type="hidden" name="name" value="{{$user->name}}">
					<div class="row text-left">
						<textarea name="data" class="col-md-6" style="height:30px; border:2px solid gray;padding-top:3px"><?php echo $user->data;?></textarea>
					</div>
				<br><br>
				<div class="row">
					<div class="col-md-2">
						<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
			</div>
				</div>
			</form>
        </div>
		</diV>
	</div>
		@endif
@if($user->url=='home_registration_text')
	<div class="wraper container-fluid">

		<!-- end col -->
		<div class="row">
			<div class="col-lg-12" style="background-color:white;padding-left:20px;">
				<div class="">
					<div class="">
						<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
						Registration Text.</h3>
					</div>
					<div>
					<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
					<div>
					</div>
				</div>

			<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <input type="hidden" name="id" value="{{$user->id}}">
				<input type="hidden" name="url" value="{{$user->url}}">
				<input type="hidden" name="name" value="{{$user->name}}">

					<div class="row text-left">
						<textarea name="data" class="col-md-6" style="height:150px; border:2px solid gray;padding-top:3px"><?php echo $user->home_registration_text;?></textarea>
					</div>

				<br><br>
				<div class="row">
					<div class="col-md-2">
						<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
			</div>
				</div>
			</form>
        </div>
		</diV>
	</div>
    @endif

	@if($user->url=='home_inauguration_image')
			<div class="wraper container-fluid">
				<div class="row">
					<div class="col-lg-12" style="background-color:white;padding-left:20px;">
						<div class="">
							<div class="">
								<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
								Home Inauguration Images
								</h3>
							</div>
							<div>
								<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
								<div>
							</div>
						</div>

					<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="url" value="{{$user->url}}">
				        <input type="hidden" name="name" value="{{$user->name}}">				<div>
						<img class="img-thumbnail" src="<?php echo '/uploads/gallery/'.$user->home_inauguration_image;?>" style="height:350px" width="50%"><br><br>
						<input type="hidden" name="image" value="{{$user->home_inauguration_image}}">
						<input type="file" class="filestyle" name="img" required="required" accept="image/*"><br>
						<div class="row">
							<div class="col-md-2">
								<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
							</div>
						</div>
					</div>	<br>
				</form>
            </div>
			</diV>
		</div>
	@endif

	@if($user->url=='home_competition1_image')
			<div class="wraper container-fluid">
				<div class="row">
					<div class="col-lg-12" style="background-color:white;padding-left:20px;">
						<div class="">
							<div class="">
								<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
								Home Competition1 Images
								</h3>
							</div>
							<div>
								<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
								<div>
							</div>
						</div>

					<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="url" value="{{$user->url}}">
				        <input type="hidden" name="name" value="{{$user->name}}">				<div>
						<img class="img-thumbnail" src="<?php echo '/uploads/gallery/'.$user->home_competition1_image;?>" style="height:350px" width="50%"><br><br>
						<input type="hidden" name="image" value="{{$user->home_competition1_image}}">
						<input type="file" class="filestyle" name="img" required="required" accept="image/*"><br>
						<div class="row">
							<div class="col-md-2">
								<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
						</div>
						</div>
					</div><br>
				</form>
            </div>
			</diV>
		</div>
	@endif

	@if($user->url=='home_competition2_image')
			<div class="wraper container-fluid">
				<div class="row">
					<div class="col-lg-12" style="background-color:white;padding-left:20px;">
						<div class="">
							<div class="">
								<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
								Home Competition1 Images
								</h3>
							</div>
							<div>
								<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
								<div>
							</div>
						</div>

					<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="url" value="{{$user->url}}">
				        <input type="hidden" name="name" value="{{$user->name}}">				<div>
						<img class="img-thumbnail" src="<?php echo '/uploads/gallery/'.$user->home_competition2_image;?>" style="height:350px" width="50%"><br><br>
						<input type="hidden" name="image" value="{{$user->home_competition2_image}}">
						<input type="file" class="filestyle" name="img" required="required" accept="image/*"><br>
						<div class="row">
							<div class="col-md-2">
								<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
							</div>
						</div>
					</div>	<br>
				</form>
            </div>
			</diV>
		</div>
	@endif

	@if($user->url=='home_gallery_img1')
			<div class="wraper container-fluid">
				<div class="row">
					<div class="col-lg-12" style="background-color:white;padding-left:20px;">
						<div class="">
							<div class="">
								<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
								Home Gallery1 Image.
								</h3>
							</div>
							<div>
								<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
								<div>
							</div>
						</div>

					<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="url" value="{{$user->url}}">
				        <input type="hidden" name="name" value="{{$user->name}}">				<div>
						<img class="img-thumbnail" src="<?php echo '/uploads/gallery/'.$user->home_gallery_img1;?>" style="height:350px" width="50%"><br><br>
						<input type="hidden" name="image" value="{{$user->home_gallery_img1}}">
						<input type="file" class="filestyle" name="img" required="required" accept="image/*"><br>
						<div class="row">
							<div class="col-md-2">
								<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
						</div>
						</div>
					</div>	<br>
				</form>
            </div>
			</diV>
		</div>
	@endif

	@if($user->url=='home_gallery_img2')
			<div class="wraper container-fluid">
				<div class="row">
					<div class="col-lg-12" style="background-color:white;padding-left:20px;">
						<div class="">
							<div class="">
								<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
								Home Gallery2 Image.
								</h3>
							</div>
							<div>
								<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
								<div>
							</div>
						</div>

					<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="url" value="{{$user->url}}">
				        <input type="hidden" name="name" value="{{$user->name}}">		<div>
						<img class="img-thumbnail" src="<?php echo '/uploads/gallery/'.$user->home_gallery_img2;?>" style="height:350px" width="50%"><br><br>
						<input type="hidden" name="image" value="{{$user->home_gallery_img2}}">
						<input type="file" class="filestyle" name="img" required="required" accept="image/*"><br>
						<div class="row">
							<div class="col-md-2">
								<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
						</div>
						</div>
					</div>	<br>
				</form>
            </div>
			</diV>
		</div>
	@endif

	@if($user->url=='home_gallery_img3')
			<div class="wraper container-fluid">
				<div class="row">
					<div class="col-lg-12" style="background-color:white;padding-left:20px;">
						<div class="">
							<div class="">
								<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
								Home Gallery3 Image.
								</h3>
							</div>
							<div>
								<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
								<div>
							</div>
						</div>

					<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="url" value="{{$user->url}}">
				        <input type="hidden" name="name" value="{{$user->name}}">			<div>
						<img class="img-thumbnail" src="<?php echo '/uploads/gallery/'.$user->home_gallery_img3;?>" style="height:350px" width="50%"><br><br>
						<input type="hidden" name="image" value="{{$user->home_gallery_img3}}">
						<input type="file" class="filestyle" name="img" required="required" accept="image/*"><br>
						<div class="row">
							<div class="col-md-2">
								<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
							</div>
						</div>
					</div>	<br>
				</form>
            </div>
			</diV>
		</div>
	@endif

	@if($user->url=='home_gallery_img4')
			<div class="wraper container-fluid">
				<div class="row">
					<div class="col-lg-12" style="background-color:white;padding-left:20px;">
						<div class="">
							<div class="">
								<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
								Home Gallery4 Image.
								</h3>
							</div>
							<div>
								<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
								<div>
							</div>
						</div>

					<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="url" value="{{$user->url}}">
				        <input type="hidden" name="name" value="{{$user->name}}">				<div>
						<img class="img-thumbnail" src="<?php echo '/uploads/gallery/'.$user->home_gallery_img4;?>" style="height:350px" width="50%"><br><br>
						<input type="hidden" name="image" value="{{$user->home_gallery_img4}}">
						<input type="file" class="filestyle" name="img" required="required" accept="image/*"><br>
						<div class="row">
							<div class="col-md-2">
								<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
						</div>
						</div>
					</div>	<br>
				</form>
            </div>
			</diV>
		</div>
	@endif

	@if($user->url=='home_gallery_img5')
			<div class="wraper container-fluid">
				<div class="row">
					<div class="col-lg-12" style="background-color:white;padding-left:20px;">
						<div class="">
							<div class="">
								<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
								Home Gallery5 Image.
								</h3>
							</div>
							<div>
								<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
								<div>
							</div>
						</div>

					<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="url" value="{{$user->url}}">
				        <input type="hidden" name="name" value="{{$user->name}}">			<div>
						<img class="img-thumbnail" src="<?php echo '/uploads/gallery/'.$user->home_gallery_img5;?>" style="height:350px" width="50%"><br><br>
						<input type="hidden" name="image" value="{{$user->home_gallery_img5}}">
						<input type="file" class="filestyle" name="img" required="required" accept="image/*"><br>
						<div class="row">
							<div class="col-md-2">
								<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button></div>
							</div>
						</div>
					</div>	<br>
				</form>
            </div>
			</diV>
		</div>
	@endif

	@if($user->url=='home_gallery_img6')
			<div class="wraper container-fluid">
				<div class="row">
					<div class="col-lg-12" style="background-color:white;padding-left:20px;">
						<div class="">
							<div class="">
								<h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">
								Home Gallery6 Image.
								</h3>
							</div>
							<div>
								<a href="#" onclick="window.history.back();"><i class="fa fa-backward btn btn-info" aria-hidden="true" style="border-radius:10px">&nbsp;Back</i></a>			</div><br>
								<div>
							</div>
						</div>

					<form action="{{url('updatepage')}}" method="post" enctype="multipart/form-data"><div style="background-color:white;border-radius:8px;padding-left:20px;">
						<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="url" value="{{$user->url}}">
				        <input type="hidden" name="name" value="{{$user->name}}">				<div>
						<img class="img-thumbnail" src="<?php echo '/uploads/gallery/'.$user->home_gallery_img6;?>" style="height:350px" width="50%"><br><br>
						<input type="hidden" name="image" value="{{$user->home_gallery_img6}}">
						<input type="file" class="filestyle" name="img" required="required" accept="image/*"><br>
						<div class="row">
							<div class="col-md-2">
								<button type="submit" class="btn" style="border-radius:8px;height:45px;width:180px;background-color:#808080;color:white"><b>Submit</b></button>
                            </div>
							</div>
						</div>
					</div>	<br>
				</form>
            </div>
			</diV>
		</div>
	@endif
@endforeach
@endif

@stop
