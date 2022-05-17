<title>Result - Panjab University Rose Festival</title>

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
                                <img src="{{url('resources/views/home/images/leaves-rose.png')}}" class="center-block img-responsive flower-img" alt="">                                
                                <h2>Result</h2>
                                <img src="{{url('resources/views/home/images/line.png')}}" class="center-block img-responsive btm-img" alt="">
                            </div>
                        </div>
                        <!-- END PAGE TITLE -->


                        <!-- BREADCRUMB -->
                        <div class="container text-center wdp_breadcrumb_container">
                            <ol class="breadcrumb wdp_breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">Result</li>
                            </ol>
                        </div>
                        <!-- END BREADCRUMB -->   

                        <!-- PAGE PHOTO ALBUM -->
                        <section id="wdp_page_photo_album">

                            <div class="container wdp_margin_top_4">
                                <h4 class="wdp_event_title text-center">Result 2019</h4>
                            </div> 

                            <section class="equal contact-box clearfix">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="{{url('get_result')}}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 				<div style="margin-left:auto; margin-right:auto; text-align:center" class="row">
   					<select name="eventname" class="form-control input-md" id="eventname">
  						<option value="no" >Select Your Event</option>
  						<option value="collagemaking">COLLAGE MAKING COMPETITION</option>
  						<option value="creativemehandi">CREATIVE MEHANDI COMPETITION</option>
  						<option value="dance">DANCING COMPETITION</option>
  						<option value="facepainting">FACE PAINTING</option>
  						<option value="fancydress">FANCY DRESS COMPETITION</option>
  						<option value="paintingmentally">PAINTING COMPETITION For Children With Intellectual Disability (Mentally Challenged)</option>
  						<option value="paintingcom">PAINTING COMPETITION</option>
  						<option value="photography">PHOTOGRAPHY COMPETITION</option>
  						<option value="poeticrecitation">POETIC RECITATION</option>
  						<option value="rangolicom">RANGOLI COMPETITION</option>
  						<option value="roseprince">ROSE PRINCE AND ROSE PRINCESS</option>
  						<option value="rosequiz">ROSE QUIZ</option>
  						<option value="singing">SINGING COMPETITION</option>
  						<option value="sloganwriting">SLOGAN WRITING COMPETITION</option>
  						<option value="fashion">FASHION COMPETITION</option>
  					</select>
  					<div style="padding:4px;"></div>
  				</div>
				<button class="col-md-12 col-xs-12 col-lg-12 btn btn-danger" style="background-color:maroon">&nbsp;Submit</button>
 </form>
</div>
<div class="col-md-4"></div>
</div>
</section><br>
@if(isset($users))
<section>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 text-center">
<table class="table table-bordered text-center" style="border:2px solid maroon">
<tr>
<th colspan="4" class="text-center">
Result 2019
</th>
</tr>
<tr style="border:1px solid black;" class="text-center">
<th class="text-center">Position</th>
<th class="text-center">Event Name</th>
<th class="text-center">Name</th>
<th class="text-center">Age Group</th>
</tr>
@foreach($users as $user)
<tr style="border:1px solid black;">
<td><?php echo $user->position;?></td>
<td><?php echo $user->event_name;?></td>
<td><?php echo $user->name;?></td>
<td><?php echo $user->age;?></td>
</tr>
@endforeach
<?php if(count($users)==0){?>
<tr>
<td>No Result Found!</td>
<td>--------</td>
<td>--------</td>
<td>--------</td>
</tr>
<?php
}?>
</table>
</div>
<div class="col-md-3"></div>
</div>
<div style="padding-bottom:50px"></div>
</section>
@endif

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
 