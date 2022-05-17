@foreach($users  as $user)
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Registration Successfull - Panjab University Rose Festival.</title>

        <!-- Bootstrap -->
        <link href="{{url('resources/assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('resources/assets/css/custom.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('resources/assets/css/media.css')}}" rel="stylesheet" type="text/css">
		  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		  <link rel="icon" href="{{url('resources/assets/home/images/favicon.ico')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="{{url('resources/assets/js/jquery-1.11.3-jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('resources/assets/html2canvas.js')}}"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    
<style>
  .loader,
        .loader:after {
            border-radius: 50%;
            width: 10em;
            height: 10em;
        }
        .loader {            
            margin: 60px auto;
            font-size: 10px;
            position: relative;
            text-indent: -9999em;
            border-top: 1.1em solid rgba(4, 25, 55, 0.2);
            border-right: 1.1em solid rgba(4, 25, 55, 0.2);
            border-bottom: 1.1em solid rgba(4, 25, 55, 0.2);
            border-left: 1.1em solid black;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load8 1.1s infinite linear;
            animation: load8 1.1s infinite linear;
        }
        @-webkit-keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        #loadingDiv {
            position:absolute;;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background-color:white;
        }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    
$('body').append('<div  style="padding-top:150px;" class="text-center" id="loadingDiv"><div class="loader"></div>Please wait...<br>We are processing your request...</div>');
$(window).on('load', function(){
  setTimeout(removeLoader,2555000); //wait for page load PLUS two seconds.
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
  });  
}
</script>

       <div class="container contain" id="generateImg" style="background-color:white;padding-top:10px;margin-right:140px"> 
            <div class="row">
<?php $head=DB::select("Select * from header");?>
            @foreach($head as $logo)
                <div class="col-md-3 logo"><img src="<?php echo 'uploads/gallery/'.$logo->icon;?>" class="img-responsive"></div>
                         @endforeach<div class="col-md-6">
            
        <h2>PANJAB UNIVERSITY</h2>
                    <h2>ROSE FESTIVAL</h2>

                </div>
                <div class="col-md-2 boxed">
				<img src="<?php echo 'uploads/group_photos/'.$user->merchant_param2;?>" class="img-responsive">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row"><div class="col-md-12 col-xs-12"><hr class="dotted" /></div></div> 
            <div class="row">
                <center> <h4>Acknowledgement</h4></center>
                <div class="clearfix"></div>
            </div>
            <div class="row">
            
                    <form class="">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label colo-sm-5">Registration ID --- {{$user->id}}</label>
                              
                            </div>
                            <div class="form-group">
                                <label class="control-label">Received with thanks Rs.{{$user->amount}}</label>
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email ID --- {{$user->billing_email}}</label>
                                
                            </div>
							 <div class="form-group">
                                <label class="control-label">Group Name --- {{$user->group_name}}</label>
                                
                            </div>
							<?php //name?>
							 
                        </div>
                        <div class="col-md-6 col-xs-12">
												
                            <div class="form-group">
                                <label class="control-label">Date. --- {{$user->date}}</label>                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Bank Ref. NO. --- {{$user->bank_ref_no}}</label>                              
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="Sr.No.">For participation in --- {{$user->eventname}}</label>
                                <div class="col-sm-1">
                                </div>
                            </div>
							 <div class="form-group">
							 <?php $names=DB::select("Select * from reg where id=?",[$user->id]);?>
							 
                                <label class="control-label">Participant Names ---@foreach($names as $name) {{$name->membername}},</label>
                                @endforeach
                            </div>
																
                        </div>
					
                    </form>
            </div>
            <div class='row margin'>
                <div class='col-md-1'></div>
                <div class='col-md-5'>
                    <h6>Signature of the<br> official receiving the Form</h6>
                </div>
                <div class='col-md-1'></div>
                <div class='col-md-5'>
                   <h6>Signature of the<br> official receiving the Form</h6>
                </div>
            </div>
             <div class='row '>
                 <div class='col-md-1'></div>
                 <div class='col-md-10'>
                     <h5><b>Those applying online should bring the acknowledgement receipt and an attested copy of DOB certificate at the venue of the Competition. Entry in the competition will be allowed to the participants having acknowdgement slip &  attested copy of DOB certificate.</b>
					 </h5>
                 </div>
                 <div class='col-md-1'></div>
               
            </div>
        </div>
      

		<script type="text/javascript">

	jQuery(document).ready(function(){
		html2canvas(document.getElementById("generateImg"), {  
			onrendered: function(canvas)  
			{
				var img = canvas.toDataURL()
				$.post("{{url('save')}}", {data: img,id:'<?php echo $user->id;?>','_token':'<?php echo csrf_token(); ?>'}, function (file) {
				
				});   
			}
		});
	});
</script>

<form name="redirect" action="{{url('success_reg')}}" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
<input type="hidden" name="id" value="{{$user->id}}">
</form>
        <script src="{{url('resources/assets/js/bootstrap.min.js')}}"></script>
   <script language='javascript'>
   setTimeout(function(){ document.redirect.submit()},5000);
  </script>
	      @endforeach
    </body>
     <script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>

</html>
