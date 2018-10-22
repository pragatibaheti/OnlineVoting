<?php
if(isset($_POST['submit']))
{
	$msg=$_POST['message'];
	$no=$_POST['mobile'];

	// Authorisation details.
	$username = "pragatibaheti001@gmail.com";
	$hash = "ba125beafd550741c9e52799524598790f5b5f1328dfe80339b4dc3b591b4cf9";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$no"; // A single number or a comma-seperated list of numbers
	$message = "$msg";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo "hello";

}
?>