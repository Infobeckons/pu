var loadFile = function(event) {
    var output = document.getElementById('previewuser');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
	
jQuery(document).ready(function(){
	if(jQuery('#eventname').val()=='singing'){ $('#signingmem').css('display','block'); }
	if(jQuery('#eventname').val()=='dance'){ $('#dancemem').css('display','block'); }
	if(jQuery('#eventname').val()=='fashion'){ $('#fashionmem').css('display','block'); }
	if(jQuery('#eventname').val()=='paintingmentally'){ $('#amount').val('0'); }
	
	if(jQuery('#eventname').val()=='singing'){ 
	var countsing=jQuery('#singingmember').val();
	if(countsing=='1')
	  {
		jQuery('#amount').val('300');
		 $('#groupname').text('Name');
		 $(".danceapend").html('');

	  }
	  else
	  {
		jQuery('#groupname').text('Group Name');
		jQuery('#amount').val('400');
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');
		 
		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countsing; i++) 
		 {
		 data+='<div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-3"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		  for (i = 1; i<=countmem; i++) 
		  {
			$("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:2015",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });
   
		 }
	  }
	}
	
	if(jQuery('#eventname').val()=='dance'){
	var countmem= jQuery('#dancemember').val();
	if(countmem=='1')
	  {
		 jQuery('#amount').val('300');
		 $('#groupname').text('Name');
		 $(".danceapend").html('');
		 $('#headfathername').text("Father Name");
		 $('#headdob').text("Date of Birth");
	  }
	  else
	  {
		 var totalmem=300;
		 jQuery('#amount').val(totalmem*countmem);
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');
		 
		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countmem; i++) 
		 {
		 data+='<div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-3"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		 for (i = 1; i<=countmem; i++) 
		 {
		 $("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:2015",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });
		 }
	  }
	}
	
	
	
	jQuery('#eventname').change(function(){
	var eventName=$(this).val();
	if(eventName=='collagemaking'){ var amount=100; }
	if(eventName=='creativemehandi'){ var amount=2; }
	if(eventName=='fashion'){ 
	$('#fashionmem').css('display','block');
	var amount=200; }
	 else { 
	$('#fashionmem').css('display','none');
    $('.danceapend').html('');
	}
	if(eventName=='dance'){ 
	$('#dancemem').css('display','block');
	var amount=300; }
	 else { 
	$('#dancemem').css('display','none');
	jQuery('#groupname').text('Name');
    $('.danceapend').html('');
	}
	if(eventName=='facepainting'){ var amount=100; }
	if(eventName=='fancydress'){var amount=100; }
	if(eventName=='paintingmentally'){ var amount=0; }
	if(eventName=='paintingcom'){ var amount=100; }
	if(eventName=='photography'){var amount=100; }
	if(eventName=='poeticrecitation'){ var amount=100; }
	if(eventName=='rangolicom'){ var amount=100; }
	if(eventName=='roseprince'){ var amount=300; }
	if(eventName=='roseprincess'){ var amount=300; }
	if(eventName=='rosequiz'){ var amount=100; }
	if(eventName=='singing'){ 
	$('#signingmem').css('display','block');
	var amount=300; 
	} else { 
	$('#signingmem').css('display','none');
	jQuery('#groupname').text('Name');
	jQuery('#firstmember').css('display','none');
	jQuery('#secondmember').css('display','none');
	jQuery('#headfathername').text('Father Name');
		
	}
	if(eventName=='sloganwriting'){ var amount=100; }
	jQuery('#amount').val(amount);
	});
	
	jQuery('#singingmember').change(function(){
	  var countmem=$(this).val();
	  if(countmem=='1')
	  {
		jQuery('#amount').val('300');
		$('#groupname').text('Name');
		$(".danceapend").html('');
		 $('#fathernamem').css("display",'block');
		 $('#dateofbm').css("display",'block');
		 $('#ageason').css("display",'block');
	  }
	  else
	  {
		jQuery('#groupname').text('Group Name');
		jQuery('#amount').val('400');
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');
		 
		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countmem; i++) 
		 {
		 data+='<div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-3"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		 for (i = 1; i<=countmem; i++) 
		 {
		 $("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:2015",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });
		 }
		
	  }
	});
	
	jQuery('#dancemember').change(function(){
	  var countmem=$(this).val();
	  
	  if(countmem=='1')
	  {
		 jQuery('#amount').val('300');
		 $('#groupname').text('Name');
		 $(".danceapend").html('');
		 $('#headfathername').text("Father Name");
		 $('#headdob').text("Date of Bith");
	  }
	  else
	  {
		 var totalmem=300;
		 jQuery('#amount').val(totalmem*countmem);
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');
		 
		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countmem; i++) 
		 {
		 data+='<div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-3"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		  for (i = 1; i<=countmem; i++) 
		 {
		 $("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:2015",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });
		 }
	  }
	  
	});
	
	
		
	jQuery('#fashionmember').change(function(){
	  var countfeshmem=$(this).val();
	  
	  if(countfeshmem=='1')
	  {
		 jQuery('#amount').val('200');
		 $('#groupname').text('Name');
		 $(".danceapend").html('');
	  }
	  else
	  {
		 var totalmem=200;
		 jQuery('#amount').val(totalmem*countfeshmem);
		 $('#groupname').text('Group Name');
		 $('#fathernamem').css("display",'none');
		 $('#dateofbm').css("display",'none');
		 $('#ageason').css("display",'none');
		 
		 var text = "";
		 var i;
		 var data='';
		 for (i = 1; i<=countfeshmem; i++) 
		 {
		 data+='<div class="form-group member-col" style="display:block" id="member'+i+'"><label class="col-md-3 control-label" for="member'+i+'" id="member'+i+'">Member Name '+i+'</label><div class="col-md-3"><input id="membername'+i+'" name="membername'+i+'" type="text" placeholder="Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberfathername'+i+'" name="memberfathername'+i+'" type="text" placeholder="Father Name" class="form-control input-md" required></div><div class="col-md-3"><input id="memberdob'+i+'" name="memberdob'+i+'" type="text" placeholder="Date Of Birth" class="form-control input-md" required></div></div>';
		 }
		 $(".danceapend").html(data);
		  for (i = 1; i<=countmem; i++) 
		 {
		 $("#memberdob"+i).datepicker({
			changeMonth:true,
			 changeYear:true,
			yearRange: "1980:2015",
			defaultDate: '01-01-1980'
			}).on('keypress', function(e){ e.preventDefault(); });
		 }
	  }
	  
	});
	
	$("#datepicker1").keydown(function (event) {
    event.preventDefault();
    });
	
		jQuery('#submit').click(function(){
		var event=jQuery('#eventname').val();

		if(event=='no')
		{
		jQuery('#eventname').css('border','1px solid red');
		return false;
		}
		else
		{
		jQuery('#eventname').css('border','');
		}
		});

});