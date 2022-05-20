            <!-- SITE-HEADER -->
            @include('home/header')
            <!-- END SITE-HEADER -->

            <!-- SITE-CONTENT -->
            <div id="content" class="site-content">

                <!-- PRIMARY -->
                <div id="primary" class="content-area">

                    <!-- MAIN -->
                    <main id="main" class="site-main" role="main">


                        <!-- SLIDESHOW -->
                        <section class="m-header">
                            {{-- comment --}}
                            {{-- comment --}}
                            {{-- comment --}}

                        </section>
	                             <div class="container-fluid">
									<div class="row text-center visit-row">
										<div class="col-md-3 visit-box">

											    <h1 class="visit-h1">Total Visitors :- {{$Visitor}}</h1>

										</div>
										<div class="col-md-9 marquee-box">
											<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
											    <?php $reg=DB::select("select * from files");?>
                                                    @foreach($reg as $registration)
                                                        @if($registration->reg_status=="ON")
											                <b>
											                    Last date for sale and acceptance of forms for photography competition extended till 07.02.2020 upto 5pm and for other competitions till 08.02.2020 till 5pm.
											                </b>
											            @else

											                <b>Registration Closed : &nbsp;&nbsp;&nbsp;&nbsp;For more information call on : 99140-03004, 98148-93401, 99145-27023, 0172-2534365</b>
											            @endif
											        @endforeach
											</marquee>
										</div>
									</div>
								</div>
                        <section id="countdown" class="text-center wdp_margin_top_6">

                            <div class="container wdp_section_title main-sec">
                                <img src="{{asset('home/images/leaves-rose.png')}}" class="center-block img-responsive flower-img" >
                                <h2 class="welcome">Welcome to</h2>
                                <h2>Panjab University Rose Festival</h2>
                                <img src="{{asset('home/images/line.png')}}" class="center-block img-responsive btm-img">

                                <?php $home=DB::select("select * from headers where `url`='home_page_about'");?>
                                @foreach($home as $data)
                                <p class="main-p">{{$data->data}}</p>
                                <center>
                                    <a href="{{url('about')}}" class="btn wdp_btn wdp_margin_top_4">Read more</a>
                                </center>
                                @endforeach

                                <h1 class="info-heading">For more information</h1>
                                <p class="wdp_contact_bar_phone"><i class="fa fa-mobile"></i>
                                    <?php $users=DB::select("select * from contacts"); ?>@if(isset($users))
                                    @foreach($users as $user)
                                    {{$user->contact1}} / {{$user->contact2}} / {{$user->contact3}}</p>
                                    </div>@endforeach @endif



                        </section>
                        <!-- END COUNTDOWN -->

                        <!-- ABOUT -->
                        <section id="about" class="text-center wdp_margin_top_6">
                            <div class="wdp_about_inner wdp_about_background ">
                                <img src="{{asset('home/images/leaves-rose-white.png')}}" class="center-block img-responsive flower-img" >
                                <h2 class="white-heading">Special Attractions</h2>
                                <img src="{{asset('home/images/line-white.png')}}" class="center-block img-responsive btm-img-white" />
                                <div class="container mdp-row">

                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/Fashion-competition.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>FASHION<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/ROSE-PRINCE.png')}}"  class="img-responsive center-block"  alt=""/>
                                                    <h4>ROSE PRINCE<br>
                                                        & PRINCESS</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/Flower-competition.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>FLOWER<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/photography-competition.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>PHOTOGRAPHY<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                            <div class="competiton-box">
                                                <img src="{{asset('home/images/painting-competition.png')}}" alt="" class="img-responsive center-block" />
                                                <h4>PAINTING<br>
                                                    COMPETITION</h4>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/Fancy-dress.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>FANCY<br>
                                                        DRESS</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/catch.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>CATCH THE GLIMPSES<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/natural.png')}}"  class="img-responsive center-block"  alt=""/>
                                                    <h4>NATURAL BIODIVERSITY<br>
                                                        EXHIBITION & WORKSHOP</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/collage-making-competition.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>COLLAGE MAKING<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/dancing-competition.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>DANCING<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                            <div class="competiton-box">
                                                <img src="{{asset('home/images/art-workshop.png')}}" alt="" class="img-responsive center-block" />
                                                <h4>ART<br>
                                                    WORKSHOP</h4>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/singing-competition.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>SINGING<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/rangoli-competition.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>RANGOLI<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/poetic.png')}}"  class="img-responsive center-block"  alt=""/>
                                                    <h4>POETIC<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{url('regs')}}">
                                                <div class="competiton-box">
                                                    <img src="{{asset('home/images/band-competition.png')}}" alt="" class="img-responsive center-block" />
                                                    <h4>BAND<br>
                                                        COMPETITION</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <section id="wdp_home_events" class="text-center wdp_margin_top_6">
                            <div class="container wdp_section_title">
                                <img src="{{asset('home/images/leaves-rose.png')}}" class="center-block img-responsive flower-img" >
                                <h2 class="welcome">Welcome to</h2>
                                <h2>Panjab University Rose Festival</h2>
                                <img src="{{asset('home/images/line.png')}}" class="center-block img-responsive btm-img" />
                            </div>
                        <div class="container">
                                <div class="row">
                                    <div class="wdp_home_event_container">
                                        <div class="wdp_home_event_item wdp_margin_top_4">
                                            <h4 class="wdp_event_title">Date</h4>
                                            <div class="clearfix wdp_margin_top_4">
                                                <div class="wdp_event_date">
                                                    <p><span class="lead"><i class="fa fa-calendar"></i></span></p>
                                                </div>
                                                <div class="wdp_event_time">
                                                    <?php $home=DB::select("select * from headers where `url`='home_date'");?>
                                                        @foreach($home as $data)
                                                        <p>{{$data->data}}</p>
                                                        @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wdp_home_event_item wdp_margin_top_4">
                                            <h4 class="wdp_event_title">Time</h4>
                                            <div class="clearfix wdp_margin_top_4">
                                                <div class="wdp_event_date">
                                                    <p><span class="lead"><i class="fa fa-clock-o"></i></span></p>
                                                </div>
                                                <div class="wdp_event_time">
                                                    <?php $home=DB::select("select * from headers where `url`='home_time'");?>
                                                        @foreach($home as $data)
                                                        <p>{{$data->data}}</p>
                                                        @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wdp_home_event_item wdp_margin_top_4">
                                            <h4 class="wdp_event_title">Venue</h4>
                                            <div class="clearfix wdp_margin_top_4">
                                                <div class="wdp_event_date">
                                                    <p><span class="lead"><i class="fa fa-map-marker"></i></span> </p>
                                                </div>
                                                <div class="wdp_event_time">
                                                    <?php $home=DB::select("select * from headers where `url`='home_vanue'");?>
                                                        @foreach($home as $data)
                                                        <p>{{$data->data}}</p>
                                                        @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="wdp_event_list">
                                <div class="post-container">
                                    <div class="container wdp_margin_top_4">
                                        <?php $home=DB::select("select * from headers where `url`='day1_date'");?>
                                                        @foreach($home as $data)
                                        <h4 class="wdp_event_title text-center"> Day 1&nbsp;<span class="bracket">(</span> <span class="m-date">{{$data->data}}</span> <span class="bracket">)</span></h4>
                                                        @endforeach
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="featured-image-content wdp_event_featured_image wdp_margin_top_6">
                                                    {{-- <a href="uploads/gallery/{{$data->home_inauguration_image}}" class="thumbnail wdp_thumbnail wdp_single_magnificPopup">
                                                        <img src="uploads/gallery/{{$data->home_inauguration_image}}" alt="" class="img-responsive" style="border-radius:10px;">
                                                    </a> --}}
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                &nbsp;&nbsp;
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="entry-content wdp_event_description">
                                                    <h2>Inauguration</h2>
                                                    <div class="wdp_event_details wdp_margin_top_4 evnt">
                                                        <p><i class="fa fa-check-circle"></i> Inauguration</p>
                                                        <p><i class="fa fa-check-circle"></i> Flower and Photography Competitions</p>
                                                        <p><i class="fa fa-check-circle"></i> Band Competition of various Schools</p>
                                                        <p><i class="fa fa-check-circle"></i> Fashion Competition</p>
                                                    </div>
                                                    <a href="{{url('registrationform')}}" class="btn wdp_btn_inverse wdp_margin_top_4">Attend</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-container">
                                    <div class="container wdp_margin_top_4">
                                        <?php $home=DB::select("select * from headers where `url`='day2_date'");?>
                                                        @foreach($home as $data)
                                        <h4 class="wdp_event_title text-center"> Day 2&nbsp;<span class="bracket">(</span> <span class="m-date">{{$data->data}}</span> <span class="bracket">)</span></h4>
                                                        @endforeach
                                        <div class="row">
                                            <div class="col-sm-2">
                                                &nbsp;&nbsp;
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="entry-content wdp_event_description">
                                                    <h2>Competitions</h2>
                                                    <div class="wdp_event_details wdp_margin_top_4 evnt">
                                                        <p><i class="fa fa-check-circle"></i> Singing</p>
                                                        <p><i class="fa fa-check-circle"></i> Rangoli</p>
                                                        <p><i class="fa fa-check-circle"></i> Collage Making</p>
                                                        <p><i class="fa fa-check-circle"></i> Slogan Writing</p>
                                                        <p><i class="fa fa-check-circle"></i> Face Painting</p>
                                                    </div>
                                                    <a href="{{('registrationform')}}" class="btn wdp_btn_inverse wdp_margin_top_4">Attend</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="featured-image-content wdp_event_featured_image wdp_margin_top_6">
                                                    {{-- <a href="uploads/gallery/{{$data->home_competition1_image}}" class="thumbnail wdp_thumbnail wdp_single_magnificPopup">
                                                        <img src="uploads/gallery/{{$data->home_competition1_image}}" alt="" class="img-responsive" style="border-radius:10px;">
                                                    </a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-container">
                                    <div class="container wdp_margin_top_4">
                                        <?php $home=DB::select("select * from headers where `url`='day3_date'");?>
                                                        @foreach($home as $data)
                                        <h4 class="wdp_event_title text-center"> Day 3&nbsp;<span class="bracket">(</span> <span class="m-date">{{$data->data}}</span> <span class="bracket">)</span></h4>
                                                        @endforeach
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="featured-image-content wdp_event_featured_image wdp_margin_top_6">
                                                    {{-- <a href="uploads/gallery/{{$data->home_competition2_image}}" class="thumbnail wdp_thumbnail wdp_single_magnificPopup">
                                                        <img src="uploads/gallery/{{$data->home_competition2_image}}" alt="" class="img-responsive" style="border-radius:10px;">
                                                    </a> --}}
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                &nbsp;&nbsp;
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="entry-content wdp_event_description">
                                                    <h2>Competitions</h2>
                                                    <div class="wdp_event_details wdp_margin_top_4 evnt">
                                                        <p><i class="fa fa-check-circle"></i> Rose Prince & Rose Princess</p>
                                                        <p><i class="fa fa-check-circle"></i> Poetic Recitation</p>
                                                        <p><i class="fa fa-check-circle"></i> Dancing Competition</p>
                                                        <p><i class="fa fa-check-circle"></i> Creative Mehandi</p>
                                                        <p><i class="fa fa-check-circle"></i> Painting</p>
                                                        <p><i class="fa fa-check-circle"></i> Fancy Dress</p>
                                                    </div>
                                                    <a href="{{url('registrationform')}}" class="btn wdp_btn_inverse wdp_margin_top_4">Attend</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </section>
                        <section id="wdp_contact_bar" class="text-center wdp_margin_top_6">
                            <div class="wdp_contact_bar_inner">

                                <div class="container">
                                    <div class="row">

                                        <div class="col-sm-7">
                                            <p class="wdp_contact_bar_phone m-cal">
                                                <?php $home=DB::select("select * from headers where `url`='home_registration_text'");?>
                                                        @foreach($home as $data)
                                                        {{$data->data}}
                                                        @endforeach
                                            </p>
                                            <p class="wdp_contact_bar_phone flower-line">
                                                Flower Competition <span class="bracket">(</span> To be applied offline only <span class="bracket">)</span> To see details <a href="{{url('flowercomp')}}" class="m-link">Click Here</a>
                                            </p>
                                        </div>
                                        <div class="col-sm-5">
                                            <a href="{{url('registrationform')}}" class="btn m-btncolr  m-font">REGISTRATION</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="wdp_photo_album" class="text-center wdp_margin_top_6">

                            <div class="container wdp_section_title">
                                <img src="{{asset('home/images/leaves-rose.png')}}" class="center-block img-responsive flower-img" >
                                <h2>Gallery</h2>
                                <img src="{{asset('home/images/line.png')}}" class="center-block img-responsive btm-img" />
                            </div>

                            <div class="container wdp_margin_top_4">

                                <div class="swiper-container wdp_photo_album_swiper">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide wdp_photo_album_swiper_item">
                                            {{-- <img src="uploads/gallery/{{$data->home_gallery_img1}}" alt="" class="img-responsive wdp_photo_album_item_image"> --}}
                                            <div class="wdp_photo_album_swiper_item_data"><p>PURF 2018 No.1</p></div>
                                        </div>

                                        <div class="swiper-slide wdp_photo_album_swiper_item">
                                            {{-- <img src="uploads/gallery/{{$data->home_gallery_img2}}" alt="" class="img-responsive wdp_photo_album_item_image"> --}}
                                            <div class="wdp_photo_album_swiper_item_data"><p>PURF 2018 No.2</p></div>
                                        </div>

                                        <div class="swiper-slide wdp_photo_album_swiper_item">
                                            {{-- <img src="uploads/gallery/{{$data->home_gallery_img3}}" alt="" class="img-responsive wdp_photo_album_item_image"> --}}
                                            <div class="wdp_photo_album_swiper_item_data"><p>PURF 2018 No.3</p></div>
                                        </div>

                                        <div class="swiper-slide wdp_photo_album_swiper_item">
                                            {{-- <img src="uploads/gallery/{{$data->home_gallery_img4}}" alt="" class="img-responsive wdp_photo_album_item_image"> --}}
                                            <div class="wdp_photo_album_swiper_item_data"><p>PURF 2018 No.4</p></div>
                                        </div>
                                        <div class="swiper-slide wdp_photo_album_swiper_item">
                                            {{-- <img src="uploads/gallery/{{$data->home_gallery_img5}}" alt="" class="img-responsive wdp_photo_album_item_image"> --}}
                                            <div class="wdp_photo_album_swiper_item_data"><p>PURF 2018 No.5</p></div>
                                        </div>
                                        <div class="swiper-slide wdp_photo_album_swiper_item">
                                            {{-- <img src="uploads/gallery/{{$data->home_gallery_img6}}" alt="" class="img-responsive wdp_photo_album_item_image"> --}}
                                            <div class="wdp_photo_album_swiper_item_data"><p>PURF 2018 No.6</p></div>
                                        </div>

                                    </div>
                                </div>

                                <a href="{{url('gal')}}" class="btn wdp_btn wdp_margin_top_4">View more</a>

                            </div>

                        </section>
                        <!-- END HOME PHOTO ALBUM -->

                        <!-- CONTACT BAR -->
                        <!-- END CONTACT BAR -->
                        {{-- comment --}}
                        @include('home/footer')
