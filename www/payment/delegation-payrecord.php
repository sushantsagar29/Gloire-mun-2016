<?php
// Turn off all error reporting
error_reporting(0);
if(count($_POST)<13){
	echo "Don't fuck around with the site";
	exit;
}
$filename = "delegation-data.txt";//file setting
foreach($_POST as $key=>$value){
	$value = trim($value);
	$value = strip_tags($value);
	$value = stripslashes($value);
	$postdata[$key]=$value; 
	file_put_contents($filename, "$key: $value\n", FILE_APPEND);//file setting
}

file_put_contents($filename, "----------\n", FILE_APPEND);//file setting
require_once('connect.php');//connecting to the server
$variant= json_decode($postdata['variants']);
$custom= json_decode($_POST['custom_fields']);

$query = "INSERT INTO delegationpayroll( pay_id,status,offer_title,name,name2,name3,name4,name5,name6,name7,email,contact,accomodation,
unit_price,quantity,amount,fees,currency,offer_slug,mac) 
						VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
				
$sth = $dbh->prepare($query);
$excute=$sth->execute(array($postdata['payment_id'],$postdata['status'],$postdata['offer_title'],$postdata['buyer_name'],$custom->Field_49609->value,
							$custom->Field_55775->value,$custom->Field_17530->value, $custom->Field_68567->value,$custom->Field_65931->value,$custom->Field_39933->value,
							$postdata['buyer'],$postdata['buyer_phone'],$variant[0]->options,$postdata['unit_price'], $postdata['quantity'],$postdata['amount'],
							$postdata['fees'],$postdata['currency'],$postdata['offer_slug'],$postdata['mac']));
?>