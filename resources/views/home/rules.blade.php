<title>Event Rules - Panjab University Rose Festival</title>
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
                         <?php $use=DB::select("select * from header"); ?>@if(isset($use)) 
								@foreach($use as $us)

                            <figure><img src="<?php echo 'uploads/gallery/'.$us->icon;?>" class="img-responsive center-block main-logo"></figure>
                            	@endforeach
                            	@endif
                        </section>
        
                        <!-- END FEATURE IMAGE -->

                        <!-- PAGE TITLE -->
                        <div id="page_title" class="wdp_margin_top_6">
                            <div class="container text-center">
                                <img src="{{url('resources/assets/home/images/leaves-rose.png')}}" class="center-block img-responsive flower-img" alt="" />                                
                                <h2>Rules</h2>
                                <img src="{{url('resources/assets/home/images/line.png')}}" class="center-block img-responsive btm-img" alt="" />
                            </div>
                        </div>
                        <!-- END PAGE TITLE -->


                        <!-- BREADCRUMB -->
                        <div class="container text-center wdp_breadcrumb_container">
                            <ol class="breadcrumb wdp_breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">Rules</li>
                            </ol>
                        </div>
                        <!-- END BREADCRUMB -->   

                        <!-- PAGE PHOTO ALBUM -->
                        <section id="wdp_page_photo_album">

                            <div class="container wdp_margin_top_4">
                                <h4 class="wdp_event_title text-center">PURF 2020 Rules & Regulation for All Competition</h4>
                            </div> 

                            <div class="container wdp_margin_top_4">


                                <div class="row ">
                                    <div class="col-md-3">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active"><a data-toggle="pill" href="#home">Painting Competition</a></li>
    										<li><a data-toggle="pill" href="#menu1">Collage Making Competition</a></li>
    										<li><a data-toggle="pill" href="#menu2">Dancing Competition</a></li>
    										<li><a data-toggle="pill" href="#menu3">Face Painting Competition</a></li>
    										<li><a data-toggle="pill" href="#menu4">Fancy Dress Competition</a></li>
    										<!--<li><a data-toggle="pill" href="#menu5">Fashion Competition</a></li>--->
											<li><a data-toggle="pill" href="#menu6">Painting Competition (Mentally Challenged)</a></li>
											<li><a data-toggle="pill" href="#menu7">Photography Competition</a></li>
											<li><a data-toggle="pill" href="#menu8">Poetic Recitation</a></li>
											<li><a data-toggle="pill" href="#menu9">Rangoli Competition</a></li>
											<li><a data-toggle="pill" href="#menu10">Rose Prince and Rose Princess</a></li>
											<li><a data-toggle="pill" href="#menu11">Singing Competition</a></li>
											<li><a data-toggle="pill" href="#menu12">Slogan Writing Competition</a></li>
											<!---<li><a data-toggle="pill" href="#menu13">Banad Competition</a></li>-->
    										<li><a data-toggle="pill" href="#menu14">Creative Mehandi Competition</a></li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">                                      
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane active" id="home">
                                                @foreach($users as $user)
													@if($user->id==1)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu1">
                                                @foreach($users as $user)
													@if($user->id==2)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu2">
                                                @foreach($users as $user)
													@if($user->id==3)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu3">
                                                @foreach($users as $user)
													@if($user->id==4)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu4">
                                                @foreach($users as $user)
													@if($user->id==5)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu5">
                                                @foreach($users as $user)
													@if($user->id==6)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu6">
                                                @foreach($users as $user)
													@if($user->id==7)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu7">
                                                @foreach($users as $user)
													@if($user->id==8)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu8">
                                                @foreach($users as $user)
													@if($user->id==9)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu9">
                                                @foreach($users as $user)
													@if($user->id==10)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu10">
                                                @foreach($users as $user)
													@if($user->id==11)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu11">
                                                @foreach($users as $user)
													@if($user->id==12)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu12">
                                                @foreach($users as $user)
													@if($user->id==13)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu13">
                                                @foreach($users as $user)
													@if($user->id==14)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane" id="menu14">
                                                @foreach($users as $user)
													@if($user->id==15)
															<?php echo $user->rules;?>
													@endif
												@endforeach
                                        </div>
                                        <!-- 2nd Rose Festival Tab Starts -->
                                        
                                    </div>
                                </div>

                            </div>

                        </section>
                        <!-- END PAGE PHOTO ALBUM -->



                        <!-- CONTACT BAR -->
                        @include('home/footer')
                        <!-- END CONTACT BAR -->

                   
        <script>
            $(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
            </script>
    </body>

</html>
