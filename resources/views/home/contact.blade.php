<title>Contact Us - Panjab University Rose Festival</title>
            <!-- SITE-HEADER -->
@include('home/header')
            <!-- END SITE-HEADER -->

            <!-- SITE-CONTENT -->
            <div id="content" class="site-content">

                <!-- PRIMARY -->
                <div id="primary" class="content-area">

                    <!-- MAIN -->
                    <main id="main" class="site-main" role="main">

                        <!-- FEATURE IMAGE -->
                        <section class="m-header">
                         {{-- < $use=DB::select("select * from header"); ?>@if(isset($use))
								@foreach($use as $us) --}}

                            {{-- <figure><img src="< echo 'uploads/gallery/'.$us->icon;?>" class="img-responsive center-block main-logo"></figure> --}}
                            	{{-- @endforeach
                            	@endif --}}
                        </section>

                        <!-- END FEATURE IMAGE -->

                        <!-- PAGE TITLE -->
                        <div id="page_title" class="wdp_margin_top_6">
                            <div class="container text-center">
                                <img src="{{url('home/images/leaves-rose.png')}}" class="center-block img-responsive flower-img" >
                                <h2>Contact Us</h2>
                                <img src="{{url('home/images/line.png')}}" class="center-block img-responsive btm-img">
                            </div>
                        </div>
                        <!-- END PAGE TITLE -->


                        <!-- BREADCRUMB -->
                        <div class="container text-center wdp_breadcrumb_container">
                            <ol class="breadcrumb wdp_breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ol>
                        </div>
                        <!-- END BREADCRUMB -->
                        <!-- CONTACT -->
                        <?php $use=DB::select("select * from contacts"); ?>
                        	@foreach($use as $us)
                        <section id="wdp_contact">

                            <div class="container-fluid wdp_margin_top_4">
                                <div class="row">

                                    <div class="wdp_contact_item">
                                        <div class="container bck">
                                            <div class="row">
                                                <div class="col-md-9 border-right">
                                                    <div class="col-md-6">
                                                        <h3><i class="fa fa-map-marker mf"></i>Address</h3>
                                                        <p>
                                                        {{$us->address}}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3><i class="fa fa-mobile mf"></i>Contact Number</h3>
                                                        <p>
                                                            Mobile: -  {{$us->contact1}}, {{$us->contact2}}.<br>
                                                        	 Mobile: -  {{$us->contact3}}.

                                                            </p>
                                                        <p>
                                                        <p class="m-fb">
                                                            <a href="{{$us->social}}" ><span><i class="fa fa-facebook"></i></span> Follow Us On Facebook </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{url('home/images/loc.png')}}" class="img-responsive center-block" alt=""/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="row  wdp_margin_top_4">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13714.067770114234!2d76.75803727298916!3d30.76006764507112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed88ed5785a1%3A0xf2739da077dc86b0!2sPanjab+University%2C+Sector+14%2C+Chandigarh!5e0!3m2!1sen!2sin!4v1523949933973" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>

                        </section>

                        @endforeach
                        <!-- END CONTACT -->

                        @include('home/footer')
                        <!-- CONTACT BAR -->
                        <!-- END CONTACT BAR -->

