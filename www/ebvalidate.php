<?php
// Turn off all error reporting
#error_reporting(0);

if(count($_POST)<10){
//this is to count how many values are sent in the post request
//if the user directly pings the page or uses other platform for pining the page with less values
	//header('LOCATION:http://www.gloiremun.in');
	$response =  "Don't fuck around with the form...";
	echo $response;
	exit;
}

$response = "";
$check = 1; #if any of the data is not provided this turns 0
foreach($_POST as $key=>$value)
{
if(strpos($value, 'ransisco') !== FALSE)
{
//header('form.php');
$response =  "Don't fuck around... XSS and San Fransisco won't work...";
echo $response;
exit;
}//end of if
else
{
$value = trim($value);
$value = strip_tags($value);
$value = stripslashes($value);
$postdata[$key]=$value; //$postdata['email']
}	//end of else
}	//end of foreach


if((strlen($postdata['name'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['name'])))){
$response .= "Empty/Invalid name"."<br />";
$check = 0;
}
if((!filter_var($postdata['email'],FILTER_VALIDATE_EMAIL)) or (strlen($postdata['email']) <1) ){
$response .= "Empty/Invalid email"."<br />";
$check = 0;
}

if((strlen($postdata['contact'])!==10) or !(ctype_digit($postdata['contact']))){
$response .= "Empty/Invalid contact no"."<br />";
$check = 0;
}
if((strlen($postdata['gender'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['gender'])))){
$response .= "Empty/Invalid gender"."<br />";
$check = 0;
}
if(strlen($postdata['address'])<1){
$response .= "Empty address"."<br />";
$check = 0;
}

if(strlen($postdata['muncount'])<1){
$response .= "Empty Count of MUNs attended"."<br />";
$check = 0;
}

if(strlen($postdata['expdel'])<1){
$response .= "Empty Experience as a Delegate"."<br />";
$check = 0;
}
if(strlen($postdata['expeb'])<1){
$response .= "Empty Experience as an Executive Board Member"."<br />";
$check = 0;
}

if(strlen($postdata['accom'])<1){
$response .= "Empty Accommodation"."<br />";
$check = 0;
}

if(strlen($postdata['preference1'])<1){
$response .= "Empty Committee preference 1"."<br />";
$check = 0;
}
if(strlen($postdata['preference2'])<1){
$response .= "Empty Committee preference 2"."<br />";
$check = 0;
}

if($check == 0){ #if any of the above if condition becomes true
	echo $response;
	exit;
}

echo "OK";#validation is successful
?>