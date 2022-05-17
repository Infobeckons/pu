<!DOCTYPE html>
<html lang="en">
  <head><title>PunjabUniversity-Rose_Festival</title>

    <link rel="stylesheet" href="{{ asset('dist/css/register.css')}}"> 
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Daterange picker -->
    {{-- <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}"> --}}
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}"> --}}
    <link rel="apple-touch-icon" href="/example.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="description" content="This is a form page.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    @include('home/header')
  <!-- <img src="{{ asset('dist/img/rose_background.jpg')}}"/> -->


  <div class="container">

    <div class="row mb-50">

    <fieldset>
  <center class="form-title"><h1>Registeration Form</h1>
    <p>Please fill in this form for Registration</p></center>


    <?php $reg=DB::select("select * from files");?>
    @foreach($reg as $registration)
    @if($registration->reg_status=="ON")


    @if(Session::get('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
          @endif

          @if(Session::get('fail'))
            <div class="alert alert-danger">
              {{Session::get('fail')}}
            </div>
          @endif
    <form action="submit" method="post" class="fileUpload" enctype="multipart/form-data">
    @csrf
    <fieldset class="border"><legend></legend>

    <span class="legend"><b>Enter Your information here:</b></span><br><br>

    <!-- <label for="image">Upload Your Image:</label>
    <input type="file" enctype="multipart/form-data" name="image" id="image" class="file" required = "true"><br><br> -->

  <div class="row">
   <div class="col-md-6">   
            <div class="image">
               <img src="" alt="" onclick="defaultBtnActive()" required="true" height="250" width="250" style="cursor:pointer" onerror="this.onerror=null;this.src='{{ asset('dist/img/images/logo.png')}}'" >
			   <input id="default-btn" type="file" lazy="loading" name="image" required="true">
			   <p>Submit your picture here!</p>
            </div>
            <div class="content">
               <div class="icon">
                  <i class="fas fa-cloud-upload-alt"></i>
               </div>
               
            </div>
            <div id="cancel-btn">
               <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <div class="file-name">
               File name here
            </div>
       
        

      <script>
         const wrapper = document.querySelector(".wrapper");
         const fileName = document.querySelector(".file-name");
         const defaultBtn = document.querySelector("#default-btn");
         const customBtn = document.querySelector("#custom-btn");
         const cancelBtn = document.querySelector("#cancel-btn i");
         const img = document.querySelector("img");
         let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
         function defaultBtnActive(){
           defaultBtn.click();
         }
         defaultBtn.addEventListener("change", function(){
           const file = this.files[0];
           if(file){
             const reader = new FileReader();
             reader.onload = function(){
               const result = reader.result;
               img.src = result;
               wrapper.classList.add("active");
             }
             cancelBtn.addEventListener("click", function(){
               img.src = "";
               wrapper.classList.remove("active");
             })
             reader.readAsDataURL(file);
           }
           else{
             alert("The Image field is empty!");
           }
           if(this.value){
             let valueStore = this.value.match(regExp);
             fileName.textContent = valueStore;
           }
         });
      </script>
    </div>


  <div class="col-md-4">
  <label class="eventname" for="eventname"><b>Event Name: </b></label>
  <select name="eventname" class="form-control wdp_form_control" id="eventnameid"  onchange="getamount();" onclick="functioncan();" required = "true" >
	  <option value="null" hidden>---Select Your Event---</option>
	  <option value="Collargemaking">Collarge Making Competition</option>
	  <option value="Creativemehandi">Creative Mehandi Competition</option>
	  <option value="Dance">Dancing Competition</option>
	  <option value="Facepainting">Face Painting</option>
	  <option value="Fancydress">Fancy Dress Competition</option>
	  <option value="Paintingmentally">Painting Competition For Children With Intellectual Disability (Mentally Challenged)</option>
	  <option value="Paintingcom">Painting Competition</option>
	  <option value="Poeticrecitation">Poetic Recitation</option>
	  <option value="Rangolicom">Rangoli Competition</option>
	  <option value="Roseprincess">Rose Prince & Rose Princess</option>
	  <option value="Rosequiz">Rose Quiz</option>
	  <option value="Singing">Singing Competition</option>
	  <option value="Sloganwriting">Slogan Writing Competition</option>
  </select>

    <div class="col-md-4" name="agegroup" id="agegroup" style="display:none" >
      <label class="control-label" for="agegroup"><b>Your AgeGroup</b></label>
      <select name="agegroup[]" id="agegroupsel" class="form-control wdp_form_control" >
        <option value="" hidden>---Select---</option>
        <option value="3-10 Year">3 to 10 Year</option>
        <option value="11-15 Year">11 to 15 year</option>
        <option value="16-40 Year">16 to 40 year</option>
      </select>
    </div>

    <div class="col-md-4" name="agegroup1" id="agegroup1" style="display:none">
      <label class="control-label" for="agegroup1"><b>Your AgeGroup</b></label>
        <select name="agegroup[]" id="agegroupsel1" class="form-control wdp_form_control">
          <option value="" hidden>---Select---</option>
          <option value="5-11 Year">5 to 11 Year</option>
          <option value="12-17 Year">12 to 17 year</option>
          <option value="18-27 Year">18  to 27 Year</option>
        </select>
    </div>

    <div class="col-md-4" name="agegroup2" id="agegroup2" style="display:none">
      <label class="control-label" for="agegroup2"><b>Your AgeGroup</b></label>
        <select name="agegroup[]" id="agegroupsel2" class="form-control wdp_form_control">
          <option value="" hidden>---Select---</option>
          <option value="1 Year">0 to 1 Year</option>
          <option value="2 Year"> 2 Year</option>
          <option value="3 Year"> 3 Year</option>
        </select>
    </div>

    <div class="col-md-4" name="agegroup3" id="agegroup3" style="display:none">
      <label class="control-label" for="agegroup3"><b>Your AgeGroup</b></label>
        <select name="agegroup[]" id="agegroupsel3" class="form-control wdp_form_control">
          <option value="" hidden>---Select---</option>
          <option value="3-5 Year">3 to 5 Year</option>
          <option value="6-8 Year">6 to 8 Year</option>
          <option value="9-12 Year">9  to 12 Year</option>
        </select>
    </div>
    <!-- {{-- <input type="hidden" name="purf_id" value="PUrf_default"> --}} -->
    <div class="col-md-4" id="members" style="display:none" >
    <label class="control-label" for="members"><b>Members</b></label>
    <select  name="members" class="form-control wdp_form_control" id="membersel" required="true"  onchange="refresh2(); refresh3();">
    	<option value="" hidden>---Select---</option>
      <option value="Solo" >SOLO</option>
      <option value="Duet">DUET</option>
      <option value="Group">GROUP</option>
    </select>
  </div>

          <div class="col-md-4" id="members1" style="display:none">
            <label class="control-label" for="members1"><b>Group of members</b></label>
           <select name="members1" id="member1" class="form-control wdp_form_control" >
             <option value="" hidden>---Select---</option>
             <option value="3" >3</option>
             <option value="4" >4</option>
             <option value="5" >5</option>
             <option value="6" >6</option>
             <option value="7" >7</option>
             <option value="8" >8</option>
             <option value="9" >9</option>
             <option value="10">10</option>
           </select>
          </div>
          <br>

  <div class="col-md-4" id="group" style="display:none">
    <label class="control-label" for="group"><b>Group/Individual/Team's' Name</b></label>
    <input id="group" name="group" type="text" placeholder="Group/Individual/Team's Name" class="form-control wdp_form_control">
  </div><br>

  </div>
</div>

  <div class="col-md-4 col-reg" id="name2" style="display: none;">
    <div class="col-fil">
      <label class="control-label" for="name"><b>Name</b></label>
      <input type="text" name="name"  placeholder="Name" style="float: left;" />
    </div>
    <div class="col-fil">
      <label class="control-label" for="Fname"><b>Father's Name'</b></label>
      <input type="text" name="Fname" placeholder="Father's_name'" style="float: left; "/>
    </div>
    <div class="col-fil">
      <label class="control-label" for="Address"><b>Address</b></label>
      <input type="text" name="Address" placeholder="Address" style="float: left; "/>
    </div>
  </div>

  <div class="row">
    <div class="danceapendx" id="danceapend"></div>
  </div>



<script>
          jQuery(document).ready(function(){
          jQuery("#eventnameid").change(function(){
              var eventName=$(this).val();
              var amountfet = document.getElementById('amountfetch').value;
                  if(eventName=='Collargemaking' || eventName=='Creativemehandi' || eventName=='Facepainting' ||
                  eventName=='Paintingmentally'|| eventName=='Paintingcom'|| eventName=='Poeticrecitation'|| eventName=='Rosequiz' ||
                   eventName=='Sloganwriting')
                  {
                      $('#agegroup').css('display','none');
                      $('#agegroup1').css('display','block');
                      $('#agegroup2').css('display','none');
                      $('#agegroup3').css('display','none');
                      $('#members').css('display','none');
                      $('#members1').css('display','none');
                      $('#group').css('display','none');
                      $('#name2').css('display','none');
                      document.getElementById('amount').value=amountfet;
                   }
                  else if(eventName=='Dance')
                  {
                    $('#agegroup').css('display','block');
                    $('#agegroup1').css('display','none');
                    $('#agegroup2').css('display','none');
                    $('#agegroup3').css('display','none');
                    $('#members').css('display','block');
                    $('#members1').css('display','none');
                    $('#group').css('display','none');
                    $('#name2').css('display','none');
                    document.getElementById('amount').value=amountfet;
                   }

                  else if(eventName=='Rangolicom')
                  {
                      $('#agegroup').css('display','none');
                      $('#agegroup1').css('display','block');
                      $('#agegroup2').css('display','none');
                      $('#agegroup3').css('display','none');
                      $('#members').css('display','none');
                      $('#members1').css('display','none');
                      $('#group').css('display','none');
                      $('#name2').css('display','none');
                      document.getElementById('amount').value=amountfet;
                    }
                  else if(eventName=='Singing')
                  {
                    $('#agegroup').css('display','none');
                    $('#agegroup1').css('display','block');
                    $('#agegroup2').css('display','none');
                    $('#agegroup3').css('display','none');
                    $('#members').css('display','block');
                    $('#members1').css('display','none');
                    $('#group').css('display','none');
                    $('#name2').css('display','none');
                    document.getElementById('amount').value=amountfet;
                  }
                  else if(eventName=='Roseprincess')
                  {
                    $('#agegroup').css('display','none');
                    $('#agegroup1').css('display','none');
                    $('#agegroup2').css('display','block');
                    $('#agegroup3').css('display','none');
                    $('#members').css('display','none');
                    $('#members1').css('display','none');
                    $('#group').css('display','none');
                    $('#name2').css('display','none');
                    document.getElementById('amount').value=amountfet;
                  }
                  else if(eventName=='Fancydress')
                  {
                    $('#agegroup').css('display','none');
                    $('#agegroup1').css('display','none');
                    $('#agegroup2').css('display','none');
                    $('#agegroup3').css('display','block');
                    $('#members').css('display','none');
                    $('#members1').css('display','none');
                    $('#group').css('display','none');
                    $('#name2').css('display','none');
                    document.getElementById('amount').value=amountfet;
                  }
                  else
                  {
                      $('#agegroup').css('display','block');
                      $('#agegroup1').css('display','none');
                      $('#agegroup2').css('display','none');
                      $('#agegroup3').css('display','none');
                      $('#members').css('display','none');
                      $('#members1').css('display','none');
                      $('#group').css('display','none');
                      $('#name2').css('display','none');
                      document.getElementById('amount').value=amountfet;
                    }
                });
            });
</script>

<script>
    function functioncan(){
        refresh(); refresh2(); refresh3();
    }
  function refresh(){
    var default1 = "Solo";
    var age="";
    var group = document.getElementById("agegroupsel");
    var group1 = document.getElementById("agegroupsel1");
    var group2 = document.getElementById("agegroupsel2");
    var group3 = document.getElementById("agegroupsel3");
    var elem = document.getElementById("membersel");

    elem.value = default1;
    group.value =age;
    group1.value=age;
    group2.value=age;
    group3.value=age;
  }
  function refresh2(){
    var default1 = "";
    var elem = document.getElementById("member1");
    elem.value = default1;
  }
  function refresh3(){
    var default1 = "";
    var elem = document.getElementById("danceapend").innerHTML=default1;
    elem.value = default1;
  }
  // function groupfresh(){
  //   var defaultt = "NULL";
  //   var elem = document.getElementById("agegroup");
  //   elem.value = defaultt;
  // }
</script>


<script>
    jQuery(document).ready(function(){
  jQuery("#membersel").change(function(){
    var member=$(this).val();
    var amountfet = document.getElementById('amountfetch').value;
    var amount = document.getElementById('amount').value;
    var dance= document.getElementById('danceapend').value;
    var two = "2";
    var multiple=amountfet*two;
    var div = amount / two;
    var flash='';
  switch(member){
    case "Solo":
      if(amountfet==amount){
            $('#members1').css('display','none');
            $('#group').css('display','none');
            $('#name2').css('display','none');
            $('#danceapend').css('display','none');
            document.getElementById('amount').value=amountfet;
            break;
      }
      else if(amountfet<amount){
            $('#members1').css('display','none');
            $('#group').css('display','none');
            $('#name2').css('display','none');
            $('#danceapend').css('display','none');
            document.getElementById('amount').value=amountfet;
            break;
      }
      else{
            $('#members1').css('display','none');
            $('#group').css('display','none');
            $('#name2').css('display','none');
            $('#danceapend').css('display','none');
            document.getElementById('amount').value=amountfet;
            break;
      }
    case "Duet":
    if(amountfet==amount){
            $('#members1').css('display','none');
            $('#group').css('display','block');
            $('#name2').css('display','block');
            $('#danceapend').css('display','none');
            document.getElementById('amount').value=multiple;
            break;
      }
      else if(amountfet>amount){
            $('#members1').css('display','none');
            $('#group').css('display','block');
            $('#name2').css('display','block');
            $('#danceapend').css('display','none');
            document.getElementById('amount').value=multiple;
            break;
      }
      else{
            $('#members1').css('display','none');
            $('#group').css('display','block');
            $('#name2').css('display','block');
            $('#danceapend').css('display','none');
            document.getElementById('amount').value=multiple;
            break;
      }
    case "Group":
    if(amountfet==amount){

            $('#members1').css('display','block');
            $('#group').css('display','block');
            $('#name2').css('display','none');
            $('#danceapend').css('display','block');
            // document.getElementById('danceapend').value=data;
            document.getElementById('amount').value=amountfet;
            break;

      }
      else if(amountfet<amount){

            $('#members1').css('display','block');
            $('#group').css('display','block');
            $('#name2').css('display','none');
            $('#danceapend').css('display','block');
            // document.getElementById('danceapend').value=data;
            document.getElementById('amount').value=div;
            break;

      }
      else{

            $('#members1').css('display','block');
            $('#group').css('display','block');
            $('#name2').css('display','none');
            $('#danceapend').css('display','block');
            // document.getElementById('danceapend').value=data;
            document.getElementById('amount').value=amountfet;
            break;
      }
    default:
            $('#members1').css('display','none');
            $('#group').css('display','none');
            $('#name2').css('display','none');
            $('#danceapend').css('display','none');
            console.log('invalid');
  }
});
    });
</script>


<script>
  jQuery(document).ready(function(){
jQuery("#member1").change(function(){
  var member=$(this).val();
  var gmember = document.getElementById('member1').value;
  var amount = document.getElementById('amount').value;
  var amountfet = document.getElementById('amountfetch').value;
  var group = document.getElementById('membersel').value;
  var amount3 = amountfet*member;
  // var text= "";
  var data='';
  var flush='';
  var i=1;
  var x;
switch(member){
  case "3":
  if(gmember==member){
      document.getElementById('amount').value=amount3;
	    for(x=2 ; x<=member; x++){
        data+='<div class="col-3"><div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member  '+i+'</label><div class="danceapend"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="member"  style="float:left" required></div><div class="danceapend"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="member" style="float:left" required></div><div class="danceapend"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Address" class="member"  required></div></div></div><br>';
        i++;
    }
    // if(i==gmember){
    document.getElementById("danceapend").innerHTML=data;
    // }
    // else{
    //   document.getElementById("danceapend").innerHTML=flush;
    // }
      break;
    }
    case "4":
  if(gmember==member){
      document.getElementById('amount').value=amount3;
	    for(x=2 ; x<=member; x++){
        data+='<div class="col-3"><div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member  '+i+'</label><div class="danceapend"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="member"  style="float:left" required></div><div class="danceapend"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="member" style="float:left" required></div><div class="danceapend"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Address" class="member"  required></div></div></div><br>';
        i++;
    }
    document.getElementById("danceapend").innerHTML=data;
      break;
    }
    case "5":
  if(gmember==member){
      document.getElementById('amount').value=amount3;
	    for(x=2 ; x<=member; x++){
        data+='<div class="col-3"><div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member  '+i+'</label><div class="danceapend"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="member"  style="float:left" required></div><div class="danceapend"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="member" style="float:left" required></div><div class="danceapend"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Address" class="member"  required></div></div></div><br>';
        i++;
    }
    document.getElementById("danceapend").innerHTML=data;
      break;
    }
    case "6":
  if(gmember==member){
      document.getElementById('amount').value=amount3;
	    for(x=2 ; x<=member; x++){
        data+='<div class="col-3"><div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member  '+i+'</label><div class="danceapend"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="member"  style="float:left" required></div><div class="danceapend"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="member" style="float:left" required></div><div class="danceapend"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Address" class="member"  required></div></div></div><br>';
        i++;
    }
    document.getElementById("danceapend").innerHTML=data;
      break;
    }
    case "7":
  if(gmember==member){
      document.getElementById('amount').value=amount3;
	    for(x=2 ; x<=member; x++){
        data+='<div class="col-3"><div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member  '+i+'</label><div class="danceapend"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="member"  style="float:left" required></div><div class="danceapend"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="member" style="float:left" required></div><div class="danceapend"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Address" class="member"  required></div></div></div><br>';
        i++;
    }
    document.getElementById("danceapend").innerHTML=data;
      break;
    }
    case "8":
  if(gmember==member){
      document.getElementById('amount').value=amount3;
	    for(x=2 ; x<=member; x++){
        data+='<div class="col-3"><div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member  '+i+'</label><div class="danceapend"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="member"  style="float:left" required></div><div class="danceapend"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="member" style="float:left" required></div><div class="danceapend"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Address" class="member"  required></div></div></div><br>';
        i++;
    }
    document.getElementById("danceapend").innerHTML=data;
      break;
    }
    case "9":
  if(gmember==member){
      document.getElementById('amount').value=amount3;
	    for(x=2 ; x<=member; x++){
        data+='<div class="col-3"><div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member  '+i+'</label><div class="danceapend"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="member"  style="float:left" required></div><div class="danceapend"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="member" style="float:left" required></div><div class="danceapend"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Address" class="member"  required></div></div></div><br>';
        i++;
    }
    document.getElementById("danceapend").innerHTML=data;
      break;
    }
    case "10":
  if(gmember==member){
      document.getElementById('amount').value=amount3;
	    for(x=2 ; x<=member; x++){
        data+='<div class="col-3"><div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member  '+i+'</label><div class="danceapend"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="member"  style="float:left" required></div><div class="danceapend"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="member" style="float:left" required></div><div class="danceapend"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Address" class="member"  required></div></div></div><br>';
        i++;
    }
    document.getElementById("danceapend").innerHTML=data;
      break;
    }
    // case "NULL":
    // if(data!==null){
    //   document.getElementById('amount').value=amountfet;
	  //   for(x=2 ; x<=member; x++){
    //     data+="";
    //       i++;
    // }
    // document.getElementById("danceapend").innerHTML=data;
    //   break;
    // }
  default:
      document.getElementById('amount').value=amountfet;
      document.getElementById("danceapend").innerHTML=flush;
      for(x=2 ; x<=member; x++){
        data+="";
          i++;
    }
    document.getElementById("danceapend").innerHTML=data;
      break;
    }
  });
});
</script>


<script type="text/javascript">
        function getamount(){
          var eventname = document.getElementById("eventnameid").value;
          // var amount = document.getElementById("amount").value;
          $.ajax({
            headers : {
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            },
            method : "POST",
            url : "{{URL::to('amountfetch')}}",
            data : {
              'id' : eventname

            },
            success: function(data){
              $("#amount").val(data);
              $("#amountfetch").val(data);
            },
          });
        }
</script>


  <br>
 <br>
  <input id="amountfetch" name="amountfetch" type="hidden" value="" class="form-control wdp_form_control" style="cursor:no-drop" readonly>

  <div class="col-md-4">
  <label class="control-label" for="amount"><b>Amount</b></label>
  <input id="amount" name="amount" type="text" value="" class="form-control wdp_form_control" style="cursor:no-drop" readonly>
  </div>


  <div class="col-md-4">
  <label class="control-label" for="username" id="username"><b>Name</b></label>
  <input id="billing_name" name="billing_name" type="text" placeholder="Name" class="form-control wdp_form_control" required = "true"  >
 </div>

  <div class="col-md-4">
  <label class="control-label" for="fathername" id="headfathername"><b>Father's Name</b></label>
  <input id="fathername" name="fathername" type="text" placeholder="Father's Name" class="form-control wdp_form_control" required = "true" >
  </div><br>


<script>
  function ageCalculator() {
      var userinput = document.getElementById("DOB").value;
      var dob = new Date(userinput);
      var fun=document.getElementById("message").innerHTML = "";
      if(userinput==null || userinput=='' ) {
        var error=document.getElementById("message").innerHTML = "**Please Choose a Valid date!";
        // return error===true;
      } else {

      //calculate month difference from current date in time
      var month_diff = Date.now() - dob.getTime();

      //convert the calculated difference in date format
      var age_dt = new Date(month_diff);

      //extract year from date
      var year = age_dt.getUTCFullYear();

      //now calculate the age of the user
      var age = Math.abs(year - 1970);

      //display the calculated age
      return document.getElementById("result").value = age;
      var fun=document.getElementById("message").innerHTML = "";
      // return fun==true;
      }
  }
  </script>

  <div class="col-md-4">
    <label class="control-label" for="dateofbirth" id="headdob"><b>Date of Birth</b></label>
    <input id="DOB" name="dateofbirth" type="date" placeholder="Date of Birth" oninput="ageCalculator()" class="form-control wdp_form_control"   min="1990-01-01" max="2020-12-31"  format="dd/mm/yyyy" style="cursor:pointer;" />
    <span id = "message" style="color:red"></span>
  </div>

    <div class="col-md-4">
<label class="control-label" for="age" id="headage"><b>Age(in Years)</b></label>
  <input  type="text" id="result" name="age" placeholder="Your Age" class="form-control wdp_form_control" required ="true"  style="cursor:no-drop"  readonly />
    </div>

  <input id="pay" name="pay" type="hidden" value="success" placeholder="Success or fail" class="form-control wdp_form_control" required = "true" >


<div class="col-md-4">
  <label class="control-label" for="add"><b>Address</b></label>
  <textarea name="billing_address" cols="62" class="form-control wdp_form_control" id="address" required = "true" style="height:35px !important"></textarea>
  </div>

  <div class="col-md-4">
  <label class="control-label" for="add"><b>City</b></label>
  <input id="billing_city" name="billing_city" type="text" placeholder="City" class="form-control wdp_form_control" required = "true" >
</div>

<div class="col-md-4">
  <label class="control-label" for="add"><b>State</b></label>
  <input id="billing_state" name="billing_state" type="text" placeholder="State" class="form-control wdp_form_control" required = "true"  >
 </div>

<div class="col-md-4">
  <label class="control-label" for="email"><b>Email</b></label>
  <input id="email" name="billing_email" type="email" placeholder="Email" class="form-control wdp_form_control" required = "true" >
  </div>

  <div class="col-md-4">
  <label for="ctry"><b>Name of Institute</b></label>
  <input id="intitude" name="institute" type="text" placeholder="Name of Institute" class="form-control wdp_form_control" required = "true" >
</div>

<div class="col-md-4">
  <label for="phone"><b>Phone</b></label>
  <input id="phone" name="phone" type="number" step="0.01" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" placeholder="Phone" maxlength="10" class="form-control wdp_form_control" required = "true"  >
 </div>

 <div class="col-md-4">
  <label for="Gender"><b>Gender</b></label>
    <div class="m-radio">
    <label class="radio-inline"><input type="radio" name="gender" id="Male" value="Male" checked="checked">Male </label>
    <label class="radio-inline"><input type="radio" name="gender" id="female" value="Female">Female</label>
    <label class="radio-inline"><input type="radio" name="gender" id="Transgender" value="Others">Others</label>
    </div>
  </div>


  <div class="col-md-6 dc-label">
  <label for="Declaration"><b>Declaration</b></label>
  <input id="declaration" name="declaration" type="text"  value="I , declare that particulars given above are correct and true. I accept the conditions of schedule and competitions of the Rose Festival." required = "true" style="width:100%"/>
  </div>

<div class="col-md-6 dc-label">
  <label class="control-label" for="date" ><b>Date</b></label>
  <input  name="date" id="datepicker" type="date" class="form-control wdp_form_control" required = "true" value=""  min="1990-01-01" max="2021-12-31">
 </div>

<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
    document.getElementById("order_id").value = d;
	};
</script>
{{-- <script>
	window.onload = function() {
		var d = new random(5);
		// document.getElementById("tid").value = d;
    document.getElementById("order_id").value = d;
	};
</script> --}}

<input type="hidden" name="merchant_id" value="120962"/>
<input type="hidden" name="currency" value="INR"/>
<input type="hidden" name="redirect_url" value="http://localhost:8000/ccavResponseHandler"/>
<input type="hidden" name="cancel_url" value="http://localhost:8000/ccavResponseHandler"/>
<input type="hidden" name="language" value="EN"/>
<input type="hidden" name="order_id" id="order_id"/>
<input type="hidden" name="tid" id="tid" readonly />



<div class="col-md-5">
    <button type="submit" name="submit" id="submit" value="submit" class="btn wdp_btn wdp_margin_top_4 registerbtn">Register</button>
</div>

</form>

@include('cookie-consent::index')

@else
<section class="equal campus text-center">
<div class="container">
<div class="heading">
  <img class="image" src="{{ asset('dist/img/panjab-university-logo-1.jpg')}}" style="width:200px">
</div>

<div class="heading2">
  <h2 class="center">Registration  Closed Agle saal try Kro</h2>
</div>

<article>
<div class="container">
<div class="row">
  <div class="col-md-12">
  </div>
</div>
</div>
</article>
</div>
</section>
@endif
@endforeach

</fieldset>
</div>
</div>


@include('home/footer')
</body>
</html>
