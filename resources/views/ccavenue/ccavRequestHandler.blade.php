@include('ccavenue.Crypto')
<html>
<head>
<title> Non-Seamless-kit</title>
</head>
<body>
<center>


<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='59C5D1FBE59B9271C12DA246DD6B4C5A';//Shared by CCAVENUES
	$access_code='AVIF68EA74AX05FIXA';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

