<?php
// Turn off all error reporting
error_reporting(0);
if(count($_POST)<4){
	echo "Don't fuck around with the form";
	exit;
}

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

#filtration of all the inputs

$postdata['name'] = 	filter_var($postdata['name'],FILTER_SANITIZE_STRING);
$postdata['email'] = 	filter_var($postdata['email'],FILTER_SANITIZE_EMAIL);

$check = 1; #if any of the data is not provided this turns 0
$response="";

if((strlen($postdata['name'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['name'])))){
$response .= "Empty/Invalid name"."<br />";
$check = 0;
}
if((!filter_var($postdata['email'],FILTER_VALIDATE_EMAIL)) or (strlen($postdata['email']) <1) ){
$response .= "Empty/Invalid email"."<br />";
$check = 0;
}
if((strlen($postdata['subject'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['subject'])))){
$response .= "Empty/Invalid subject"."<br />";
$check = 0;
}
if((strlen($postdata['message'])<1)){
$response .= "Empty/Invalid message"."<br />";
$check = 0;
}

if($check == 0){ #if any of the above if condition becomes true
	echo $response;
	exit;
}

//mailing script
	
	$email_message = "From ".$postdata['name']."\n";
	$email_message.= "Email ".$postdata['email']."\n";
	$email_message.= "Subject ".$postdata['subject']."\n\n";
	$email_message.= $postdata['message'];
	
	
	$to = "contact.gloiremun@gmail.com" ;
    $subject = "Contact us form message";
    $headers = "From: ".$postdata['name']." <".$postdata['email'].">\r\n";
    $headers .= "Reply-To: ".$postdata['email']." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1" . "\r\n";

    if(mail($to, $subject, $email_message, $headers)){
		echo "Mail has been successfully sent. We will get back to you very soon";
	}
	else{
		echo "Some error occurred. Please try again!!";
	}
?>