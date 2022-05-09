<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is an acknowledgement page to generate and display  acknowledgement">
    <title>Document</title>
    <link rel="stylesheet" defer href="{{ asset('plugins/jquery/jquery.js')}}" >
    <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.css')}}">
     <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.js')}}">
    <style>
        body{
            width: 850px;
            height: auto;
        }
        a#create_pdf {
            border: 1px solid darkgray;
            padding: 5px;
            border-radius: 5px;
            margin-left: 5px;
            color: white;
            background: #007bff;
        }
        .image{
            float: left;
           /* margin: 20px 40px 20px 40px; */
           margin-top: 10px;
           margin-left: 20px
        }
        .heading{
            float: left;
            width: auto;
            padding: 50px;
        }
        .profile{
            border: 1px solid black;
            height: 150px;
            width: 150px;
            margin-top: 40px;
           margin-left: 20px;
          margin-bottom:20px;
            /* margin: 20px 40px 20px 40px; */
        }
        .main{
            height: auto;
        }
        .container{
            border: 1px solid black;
            border-radius: 5px;
            width: 755px;
            height: 750px;
            float:left;
        }
        .first{
            /* border: 1px solid black; */
            border-right: 1px solid black;
            height: 200px;
            width: 340px;
            float:left;
            margin-top: 20px;
            margin-left:20px;
            padding-left: 10px;
        }
        .second{
            /* border: 1px solid black; */
            height: 200px;
            width: 335px;
            float:left;
            margin-top: 20px;
            margin-left:20px;
            padding-left: 10px;
        }
        .first-col{
            /* border: 1px solid black;  */
            width: 300px;
            float:left;
            margin-top: 100px;
            margin-left:20px;
            font-size: 12px;
            color:gray;
        }
        .second-col{
            /* border: 1px solid black;  */
            width: 300px;
            float:left;
            margin-top: 100px;
            margin-left:20px;
            font-size: 12px;
            color:gray;
        }
        .sign{
            /* border: 1px solid black; */
            height: 140px;
            width: 700px;
            float:left;
            margin-top: 20px;
            margin-left:25px;
        }
        p{
            margin: 0px;
        }
        .space-top{
            margin-top: 30px;

        }
    </style>
</head>
<body>
    <div class="container">
    <div class="main">
    <img src="{{ asset('dist/img/images/Logo.jpg')}}" alt="logo" class="image"  style="height: 200px; width: 200px; " >
    <center><h1 class="heading"><span>PunjabUniversity</span><br><span>-Rose_Festival</span></h1></center>
    <img src="{{'dist/uploads/ackw2019/PURF622448.png'}}"  alt="profile" class="profile"/>

<br>
    <hr>
    <center><h3>Acknowledgement</h3></center>
    <div class="first">
        <p class="space-top">Registeration ID<span></span></p><br>
        <p>Recieved with thanks<span></span></p><br>
        <p>Email<span></span></p><br>
        <p>GroupName<span></span></p><br>
    </div>
    <div class="second">
        <p class="space-top">Date<span></span></p><br>
        <p>Bank Ref.No<span></span></p><br>
        <p>Participation In<span></span></p><br>
        <p>Name<span></span></p><br>
    </div>
    <center>
    <div class="sign">
        <div class="first-col"><center><p><span>Signature of the applicant recieving the form</span></p></center></div>
        <div class="second-col"><center><p><span>Signature of the applicant recieving the form</span></p></center></div>
    </div><br>
    <div class="sign">
        <center><p><span>**Those applying should bring the acknowledgement receipt and an attested copy of DOB certificate at the vanue of the compitition.  </span>
        <span>Entery in the compition will be allowed to the participant having acknowledge receipt and attested copy of DOB certificate.**</span>
        </p></center>
    </div>
    </center>
</div>

</div>
    <a class="col-md-4 col-xs-4 col-lg-4 btn btn-danger" onclick="createPDF();" id="create_pdf" value="Generate PDF" style="cursor:pointer"><i class="zmdi zmdi-cloud-download"></i>&nbsp;PDF File</a>
    <div class="col-md-2 col-lg-2 col-xs-2"></div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script> 
    <script>  
     (function () {  
         var  form = $('.container'),  
        //   cache_width = form.width(),  
          a4 = [841.89, 595.28]; // for a4 size paper width and height  
   
         $('#create_pdf').on('click', function () {  
             $('body').scrollTop(0);  
             createPDF();  
         });  
         //create pdf  
         function createPDF() {  
             getCanvas().then(function (canvas) {  
                 var img = canvas.toDataURL("image/png");
                //   doc = new jsPDF({  
                //       unit: 'px',  
                //       format: 'a4'  
                //   });  
                var doc = new jsPDF('1', 'pt', "a4");
                 doc.addImage(img, 'JPEG', 10, 10);  
                 doc.save('PURF Report.pdf');  
                //  form.width(cache_width);  
             });  
         }  
         // create canvas object  
         function getCanvas() {  
            //  form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
             return html2canvas(form, {  
                 imageTimeout: 2000,  
                 removeContainer: false  
             });  
         }  
     }());  
 </script>  
 <script>  
     /* 
  * jQuery helper plugin for examples and tests 
  */  
     (function ($) {  
         $.fn.html2canvas = function (options) {  
             var date = new Date(),  
             $message = null,  
             timeoutTimer = false,  
             timer = date.getTime();  
             html2canvas.logging = options && options.logging;  
             html2canvas.Preload(this[0], $.extend({  
                 complete: function (images) {  
                     var queue = html2canvas.Parse(this[0], images, options),  
                     $canvas = $(html2canvas.Renderer(queue, options)),  
                     finishTime = new Date();  
   
                     $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);  
                     $canvas.siblings().toggle();  
   
                     $(window).click(function () {  
                         if (!$canvas.is(':visible')) {  
                             $canvas.toggle().siblings().toggle();  
                             throwMessage("Canvas Render visible");  
                         } else {  
                             $canvas.siblings().toggle();  
                             $canvas.toggle();  
                             throwMessage("Canvas Render hidden");  
                         }  
                     });  
                     throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);  
                 }  
             }, options));  
   
             function throwMessage(msg, duration) {  
                 window.clearTimeout(timeoutTimer);  
                 timeoutTimer = window.setTimeout(function () {  
                     $message.fadeOut(function () {  
                         $message.remove();  
                     });  
                 }, duration || 2000);  
                 if ($message)  
                     $message.remove();  
                 $message = $('<div></div>').html(msg).css({  
                     margin: 0,  
                     padding: 10,  
                     background: "#000",  
                     opacity: 0.7,  
                     position: "fixed",  
                     top: 10,  
                     right: 10,  
                     fontFamily: 'Tahoma',  
                     color: '#fff',  
                     fontSize: 12,  
                     borderRadius: 12,  
                     width: 'auto',  
                     height: 'auto',  
                     textAlign: 'center',  
                     textDecoration: 'none'  
                 }).hide().fadeIn().appendTo('body');  
             }  
         };  
     })(jQuery);  
   
             </script>  

</body>
</html>