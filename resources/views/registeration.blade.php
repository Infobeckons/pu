@extends('layouts.layout')
@section('content')

	<!-- Header Ends -->
	<!-- Page Content Start -->
	<!-- ================== -->
	
		<!-- end col -->
				<div class="portlet-heading">

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
                  
				  <h3 class="portlet-title text-dark text-uppercase" style="padding-bottom: 1%">Registration is ON/OFF</h3>
			</div>
					<!-- /primary heading -->
					{{-- <script type="text/javascript">
					function reg(){
    window.location = "{{'registeration'}}";
    					}
					</script> --}}
				<br>  
<!-- /.row -->
<!-- Main row -->
<form action="regon" method="POST">
  @csrf
  <input type="hidden" name="id" value="1">
 @if(isset($user))
    @foreach($user as $value)
				<div class="row">
				<div class="col-md-4 space">Registration is:&nbsp; <b class=color>{{$value->reg_status}}</b></div>
                    
					<div class="col-md-4 text-center"> 			
    				<div class="onoffswitch4">

                        <label class="switch">
                            @if($value->reg_status=="OFF")
                            <input type="hidden" name="reg" value="ON">   
                            {{-- <input type="hidden" name="reg" value="OFF" > --}}
                            @else
                            <input type="hidden" name="reg" value="OFF"> 
                            {{-- <input type="hidden" name="reg" value="ON" > --}}
                            @endif
                            {{-- <span class="slider round"></span> --}}
                          </label>

                      {{-- <style>
                            .switch {
                              position: relative;
                              display: inline-block;
                              width: 60px;
                              height: 34px;
                            }
                            
                            .switch input { 
                              opacity: 0;
                              width: 0;
                              height: 0;
                            }
                            
                            .slider {
                              position: absolute;
                              cursor: pointer;
                              top: 0;
                              left: 0;
                              right: 0;
                              bottom: 0;
                              background-color: #ccc;
                              -webkit-transition: .4s;
                              transition: .4s;
                            }
                            
                            .slider:before {
                              position: absolute;
                              content: "";
                              color:white;
                              height: 26px;
                              width: 26px;
                              left: 4px;
                              bottom: 4px;
                              background-color: white;
                              -webkit-transition: .4s;
                              transition: .4s;
                            }

                            input:checked + .slider {
                              background-color: #2196F3;
                            }
                            
                            input:focus + .slider {
                              box-shadow: 0 0 1px #2196F3;
                            }
                            
                            input:checked + .slider:before {
                              -webkit-transform: translateX(26px);
                              -ms-transform: translateX(26px);
                              transform: translateX(26px);
                            }
                            
                            /* Rounded sliders */
                            .slider.round {
                              border-radius: 34px;
                            }
                            
                            .slider.round:before {
                              border-radius: 50%;
                            }
                            </style> --}}
 
            <button type=submit class="form-control btn btn-primary" name="submit" value="Submit">ON/OFF</button>       
            
						</div>
							</div>
						</div>
            @endforeach
            @endif      
        </form>
        <div class="col-md-12"></div>
                        
						<script>
							initSample();
						</script>
						<div class="clearfix">
						</div>
					</div>
		    </div>
		
		<!-- Page Content Ends -->
    </section>
    <!-- /.content -->
  </div>
@stop