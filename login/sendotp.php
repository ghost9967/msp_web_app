<?php
session_start();
// Array with names

// get the q parameter from URL
$hint = "";
$q = $_REQUEST["id"];
if(($q!="")&&(filter_var($q, FILTER_VALIDATE_EMAIL)))
{
$otp = rand(100000,999999);
$to = $q;
$subject = "Your Request for OTP | MSP Predictor";
$txt = "Your Request for OTP has been received. Please enter ".$otp." to login.";
$headers = "From: do-not-reply@arpansarkar.online";
if(mail($to,$subject,$txt,$headers))
{
$_SESSION["auth"] = hash('sha256',$otp,false);
$hint = "OTP sent";
}
}
// lookup all hints from array if $q is different from ""

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Invalid / Mail Error" : $hint;
?>