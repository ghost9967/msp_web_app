<?php
// Array with names

// get the q parameter from URL
$q = $_REQUEST["id"];
$otp = rand(100000,999999);
$hint = "OTP sent ".strval($otp);

// lookup all hints from array if $q is different from ""

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Invalid / Mail Error" : $hint;
?>