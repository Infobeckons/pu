<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_4/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Feb 2018 05:23:06 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

<link rel="icon" href="{{url('home/images/favicon.ico')}}">
        <title>Recover Password - Panjab University Rose Festival.</title>

        <!-- Bootstrap core CSS -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('assets/css/bootstrap-reset.css')}}" rel="stylesheet">

        <!--Animation css-->
        <link href="{{url('assets/css/animate.css')}}" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link href="{{url('assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{url('assets/material-design-iconic-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{url('assets/css/helper.css')}}" rel="stylesheet">


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="{{url('resources/assets/js/html5shiv.js')}}"></script>
          <script src="{{url('resources/assets/js/respond.min.js')}}"></script>
        <![endif]-->


    </head>


    <body>

        <div class="wrapper-page">
            <div class="panel panel-color panel-inverse">

                <div class="panel-heading">
                   <h3 class="text-center m-t-10"> Recover Password </h3>
                </div>

                <div class="panel-body">
                    <form method="post" action="user_recover" class="text-center" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @if(!isset($users) && !isset($not))
                                                    <div class="alert alert-info alert-dismissable">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

         Enter your <b>Email</b> and instructions will be sent to you..
                        @endif
                        @if(isset($users))
                                                <div class="alert alert-success alert-dismissable">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                        Email was sent to you Successfully....
                        @endif
                        @if(isset($not))
                                                <div class="alert alert-danger alert-dismissable">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                        Sorry, your email was not found!
                        @endif

                        </div>
                        <div class="form-group m-b-0">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" required="required">
                                <span class="input-group-btn"> <button type="submit" class="btn btn-success">Reset</button> </span>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>






        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{url('assets/js/jquery.js')}}"></script>
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/js/pace.min.js')}}"></script>
        <script src="{{url('assets/js/wow.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="{{url('assets/js/jquery.app.js')}}"></script>


    </body>

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_4/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Feb 2018 05:23:06 GMT -->
</html>
