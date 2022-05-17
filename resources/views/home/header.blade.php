
{{-- comment --}}
<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title> Welcom To - Panjab University Rose Festival</title>

        <!-- GOOGLE FONTS-->
        <link href="https://fonts.googleapis.com/css?family=Comfortaa%7CScope+One%7CTangerine:700" rel="stylesheet">
        <!-- END GOOGLE FONTS-->

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="{{asset('home/css/bootstrape485.css')}}">
        <!-- END BOOTSTRAP-->
        <link rel="stylesheet" href="{{asset('home/css/magnific-popupf488.css')}}">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="{{asset('home/css/font-awesome4698.css')}}">
        <!-- END FONT AWESOME -->

        <!-- ANIMATE CSS -->
        <link rel="stylesheet" href="{{asset('home/css/animate9d52.css')}}">
        <!-- END ANIMATE CSS -->

        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="{{asset('home/css/swiper3d36.css')}}">
        <!-- END SWIPER CSS -->

        <!-- WDP STYLES -->
        <link rel="stylesheet" href="{{asset('home/css/wdp-styles4963.css')}}">
        <!-- END WDP STYLES -->

        <!-- WDP STYLE SKIN -->
        <!-- For Default Skin -->
        <link rel="icon" href="{{asset('home/images/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('home/css/skin/wdp-skin-default4963.css')}}">

        <!-- WDP MEDIA -->
        <link rel="stylesheet" href="{{asset('home/css/wdp-media4963.css')}}">
        <!-- END WDP MEDIA -->
              <!-- MODERNIZR JS -->
        <script src="{{asset('home/js/modernizr-custom3d36.js')}}"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- END MODERNIZR JS -->
    </head>
    <body class="home">

        <!-- PAGE -->
        <div id="page" class="site">

{{-- comment --}}
<style>
.m-header{
    /* {{-- comment --}} */
    background-size: cover;
    width: 100%;
    padding: 0px 0px;
    background-position: center;
    background-position-y: 30px;
    background-position-x: -9px;
    background-repeat: no-repeat;
}
.m-header2 {
    /* {{-- comment --}} */
    background-size: cover;
    width: 100%;
    padding: 0px 0px;
    background-position: center;
    background-position-y: -25px;
    background-position-x: 1px;
    background-repeat: no-repeat;
}

			</style>
			{{-- comment --}}
            <!-- SITE-HEADER -->

            <header id="masthead" class="site-header wdp_header" role="banner">

                <!-- SITE-NAVIGAION -->
                <nav id="site-navigation" class="main-navigation navbar wdp_navigation navbar-fixed-top" role="navigation">

                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#wdp_navbar_collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="wdp_navbar_collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav wdp_nav">
                                <li id="index"><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Home</a></li>
                                <li><a href="{{url('about')}}"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;About</a></li>
                                <li><a href="{{url('rules')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;&nbsp;Rules</a></li>
                                <li><a href="{{url('registrationform')}}"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>&nbsp;&nbsp;Registration</a></li>

                                <li><a href="{{url('book')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;&nbsp;Booking of stall</a></li>
                                <li><a href="{{url('event')}}"><i class="fa fa-calendar " aria-hidden="true"></i>&nbsp;&nbsp;Event Schedule</a></li>
                                <li><a href="{{url('gal')}}"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;Gallery</a></li>

                                <li><a href="{{url('conn')}}"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;Contact</a></li>
                                {{-- <!--li><a href="{{url('home_result')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;Result</a></li--> --}}

                                <li><a href="{{url('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Login</a></li>
                            </ul>
                        </div>

                    </div>
                </nav>
            </header>
                            <script>
$(document).ready(function () {
       var url = window.location;
   // Will only work if string in href matches with location
       $('ul.nav a[href="' + url + '"]').parent().addClass('wdp_current_page_item');

   // Will also work for relative and absolute hrefs
       $('ul.nav a').filter(function () {
           return this.href == url;
       }).parent().addClass('wdp_current_page_item').parent().parent().addClass('wdp_current_page_item');
   });
</script>
