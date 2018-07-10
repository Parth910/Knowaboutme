<?php

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$mailForm=$_POST['mail'];
	$message=$_POST['message'];

	$mailTo="prp4203@gmail.com";
	$headers="From: ".$mailForm;
	$txt = "you have recieved an email from ".$n ame.".\n\n".$message;

	mail($mailTo, $subject, $txt ,$headers);
	header("Location: index.html?mailsend");
}