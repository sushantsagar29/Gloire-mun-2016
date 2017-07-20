<?php
// Turn off all error reporting
error_reporting(0);
if(count($_POST)<13){
	echo "Don't fuck around with the site";
	exit;
}
$filename = "ip-data.txt";//file setting
foreach($_POST as $key=>$value){
	$value = trim($value);
	$value = strip_tags($value);
	$value = stripslashes($value);
	$postdata[$key]=$value;
	file_put_contents($filename, "$key: $value\n", FILE_APPEND);//file setting
}	

file_put_contents($filename, "----------\n", FILE_APPEND);//file setting
require_once('connect.php');//connecting to the server

$query = "INSERT INTO ippayroll( pay_id,status,offer_title,name,email,contact,unit_price,quantity,amount,fees,currency,offer_slug,mac) 
						VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
				
$sth = $dbh->prepare($query);
$excute=$sth->execute(array($postdata['payment_id'],$postdata['status'],$postdata['offer_title'],$postdata['buyer_name'], $postdata['buyer'],
							$postdata['buyer_phone'],$postdata['unit_price'], $postdata['quantity'],$postdata['amount'],$postdata['fees'],
							$postdata['currency'],$postdata['offer_slug'],$postdata['mac']));
?>