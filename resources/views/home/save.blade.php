<?php
foreach($users as $user){
	$data =$user->data; 
	}
	
	$file = md5(uniqid()) . '.png';
	 
	// remove "data:image/png;base64,"
	$uri =  substr($data,strpos($data,",")+1);
	 
	// save to file
	file_put_contents('uploads/ackw2019/'.$file, base64_decode($uri));
	 
	// return the filename
	
	$file = $file;

?>