<title>Booking Of Stall - Panjab University Rose Festival</title>

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

                            <figure>
								<img src="<?php echo 'uploads/gallery/'.$us->icon;?>" class="img-responsive center-block main-logo"></figure>
                            	@endforeach
                            	@endif
                        </section>
        
                        <!-- END FEATURE IMAGE -->

                        <!-- PAGE TITLE -->
                        <div id="page_title" class="wdp_margin_top_6">
                            <div class="container text-center">
                                <img src="{{url('resources/assets/home/images/leaves-rose.png')}}" class="center-block img-responsive flower-img" alt="">                                
                                <h2>Booking of Stall</h2>
                                <img src="{{url('resources/assets/home/images/line.png')}}" class="center-block img-responsive btm-img" alt="">
                            </div>
                        </div>
                        <!-- END PAGE TITLE -->


                        <!-- BREADCRUMB -->
                        <div class="container text-center wdp_breadcrumb_container">
                            <ol class="breadcrumb wdp_breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">Booking of Stall</li>
                            </ol>
                        </div>
                        <!-- END BREADCRUMB -->   

                        <!-- PAGE PHOTO ALBUM -->
                        <section id="wdp_page_photo_album">

                            <div class="container wdp_margin_top_4">
                                <h4 class="wdp_event_title text-center">Stall Booking</h4>
                            </div> 

                            <div class="container wdp_margin_top_4">


                                <div class="row ">
                                    <div class="col-md-3">
                                        <ul class="nav nav-pills" style=" width:150px">
                                            <li class="">
												<?php $pdf=DB::select("select * from files"); ?>
													@if(isset($pdf))
														@foreach($pdf as $pd)
															<a href="<?php echo 'uploads/pdfs/'.$pd->bfs;?>">
															<button class="red-btn">
														@endforeach
													@endif
													<img src="{{url('/images/Download-Button.png')}}">
													</button>
												</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">                                      
                                        <div class="col-md-9 wdp_gallery_magnificPopup tab-pane active" id="home">
                                        @if(isset($users))
											@foreach($users as $user)
												<?php
													echo $user->bookingstall;
												?>
											@endforeach
										@endif

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


