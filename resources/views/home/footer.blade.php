 <?php $users=DB::select("select * from contacts"); ?>
			{{-- comment --}}
            @if(isset($users))
				@foreach($users as $user)
						<section id="wdp_contact_bar" class="text-center wdp_margin_top_10 ">
                            <div class="wdp_contact_bar_inner m-green ft-bb ft-bb2">

                                <div class="container">

                                    <div class="row ">
                                        <div class="col-sm-4 footer">
                                            <i class="fa fa-envelope"></i>
                                            <p class="wdp_contact_bar_phone m-cal-footer">
                                                <span class="ft-head"> Email</span><br>
                                                {{ $user->email }}<p>
                                        </div>
                                        <div class="col-sm-4">
                                            <i class="fa fa-mobile fa1"></i>
                                            <p class="wdp_contact_bar_phone m-cal-footer">
                                                <span class="ft-head">For more information & sponsorship</span><br>

                                                {{$user->contact1}} / {{$user->contact2}} <br> / {{$user->contact3}}

                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <i class="fa fa-facebook fa2"></i>
                                            <p class="wdp_contact_bar_phone m-cal-footer">
                                            	<a href="{{ '$user->social' }}" style="text-decoration:none;color:white;">
                                                <span class="ft-head">Follow us on facebook</span>
                                                </a>
                                                <br>
                                                Visitors Count</p>
                                            <div class="m-count">
                                                <span class="contr">
                                               {{-- comment --}}
                                               {{$Visitor}}
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{url('home/images/ftr-line.png')}}" class="center-block img-responsive ftr-lineimg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid text-center foot-strip">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- < $footer=DB::select("select rights from header");?>
											@foreach($footer as $right) --}}
                                            {{-- <h4>{{$right->rights}}</h4>@endforeach --}}
                                            <h4>Design &amp; Developed by :   <a href="https://infobeckons.com/" target="_black">Infobeckons Technologies Pvt. Ltd.</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                    @endforeach
                @endif
                        </main><!-- END MAIN -->

                </div><!-- END PRIMARY -->

            </div>
            <!-- END SITE-CONTENT -->
        <!-- END PAGE -->

        <!-- JQUERY JS -->
                <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
                <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <script src="{{url('home/js/jquery.min.js')}}"></script>

        <!-- END JQUERY JS -->
          <!-- Modal -->
        <script src="{{url('home/js/jquery-migrate1576.js')}}"></script>



        <script src="{{url('home/js/jquery.magnific-popupf488.js')}}"></script>
        <!-- END MAGNIFIC POPUP JS -->

        <!-- WDP MAGNIFIC POPUP -->
        <script src="{{url('home/js/wdp-magnific-popup4963.js')}}"></script>
        <!-- WDP PRELOADER JS -->

        <script src="{{url('home/js/wdp-preloader4963.js')}}"></script>
        <!-- END WDP PRELOADER JS -->

        <!-- BOOTSTRAP JS -->
        <script src="{{url('home/js/bootstrape485.js')}}"></script>
        <!-- END BOOTSTRAP JS -->

        <!-- SWIPER JS -->
        <script src="{{url('home/js/swiper.jquery3d36.js')}}"></script>
        <!-- END SWIPER JS -->

        <!-- WDP SWIPER -->
        <script src="{{url('home/js/wdp-swiper4963.js')}}"></script>
        <!-- END WDP SWIPER -->

        <!-- FANCY SELECT JS -->
        <script src="{{url('home/js/fancySelect2fca.js')}}"></script>
        <!-- END FANCY SELECT JS -->


    </body>

</html>


