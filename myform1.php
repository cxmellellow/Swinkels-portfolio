<?php
if($_POST['submit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['name']))
	{
		$errorMessage .= "<li>You forgot to enter your name!</li>";
	}
	if(empty($_POST['email']))
	{
		$errorMessage .= "<li>You forgot to enter your email!</li>";
	}
	
	$name = $_POST['fname'];
	$email = $_POST['femail'];
    $job = $_POST['job'];

	if(empty($errorMessage)) 
	{
		$fs = fopen("mydata.csv","a");
		fwrite($fs,$name . ", " . $email . "\n");
		fclose($fs);
		
		header("Location: thankyou.html");
		exit;
	}
}
?>
