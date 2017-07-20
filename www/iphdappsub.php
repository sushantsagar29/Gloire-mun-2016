<?php
// Turn off all error reporting
error_reporting(0);
if(count($_POST)<10){
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
$postdata['contact'] = 	filter_var($postdata['contact'],FILTER_SANITIZE_NUMBER_INT);
$postdata['gender'] = 	filter_var($postdata['gender'],FILTER_SANITIZE_STRING);
$postdata['address'] = 	filter_var($postdata['address'],FILTER_SANITIZE_STRING);

$postdata['college'] = 	filter_var($postdata['college'],FILTER_SANITIZE_STRING);
$postdata['course'] = 	filter_var($postdata['course'],FILTER_SANITIZE_STRING);
$postdata['syear'] = 	filter_var($postdata['syear'],FILTER_SANITIZE_STRING);

$postdata['muncount'] = 	filter_var($postdata['muncount'],FILTER_SANITIZE_STRING);
$postdata['ipcount'] = 		filter_var($postdata['ipcount'],FILTER_SANITIZE_STRING);
$postdata['experience'] = 	filter_var($postdata['experience'],FILTER_SANITIZE_STRING);
$postdata['accom'] = 		filter_var($postdata['accom'],FILTER_SANITIZE_STRING);

$postdata['que1'] = 	filter_var($postdata['que1'],FILTER_SANITIZE_STRING);
$postdata['que2'] = 	filter_var($postdata['que2'],FILTER_SANITIZE_STRING);
$postdata['que3'] = 	filter_var($postdata['que3'],FILTER_SANITIZE_STRING);
$postdata['que4'] = 	filter_var($postdata['que4'],FILTER_SANITIZE_STRING);
$postdata['que5'] = 	filter_var($postdata['que5'],FILTER_SANITIZE_STRING);
$postdata['other_exp'] = 	filter_var($postdata['other_exp'],FILTER_SANITIZE_STRING);

$postdata['feedback'] = 	filter_var($postdata['feedback'],FILTER_SANITIZE_STRING);


require_once('connect.php');//connecting to the server

//insert details of the new delegate table
$query = "INSERT INTO iphd( name,email,contact,altcontact,gender,address,dob,college,course,syear,muncount,ipcount,experience,accom,
								que1,que2,que3,que4,que5,other_exp,feedback) 
			VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
				
$sth = $dbh->prepare($query);
$excute=$sth->execute(array($postdata['name'],$postdata['email'],$postdata['contact'],$postdata['altcontact'],$postdata['gender'], $postdata['address'], $postdata['dob'],
							$postdata['college'],$postdata['course'], $postdata['syear'], $postdata['muncount'],$postdata['ipcount'],$postdata['experience'],$postdata['accom'],
							$postdata['que1'],$postdata['que2'],$postdata['que3'],$postdata['que4'],$postdata['que5'],$postdata['other_exp'],$postdata['feedback']
							));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php');?>
<?php include('metaheader.php');?>
</head>

<body>
<div class="body-wrapper">
  <div id="header" class="navbar navbar-fixed-top">
    <?php include('header.php');?> 
  </div>
  <!-- .navbar -->
  
  <div class="primary">
    <div class="light-wrapper box">
      <div class="container">
        <div class="row">
		<div class="span2"></div>
		<div class="span8">
				<!-- span of the body -->
				<center><h2>International Press Head/ Editor in Chief Application Submission</h2></center>
				<?php
				if(!$excute ){
					echo "Error in connection"."<br/>"."Please try submitting the form again"."<br />";
					exit;
				}
				echo '<center><p text-align="center"><b>Thank you '.$postdata['name'].' for applying as International Press Head/ Editor in Chief for Gloire MUN 2016.
				<br/>We will get in touch with you very soon. Please check you inbox for confirmation mail.
				Check your spam box if our mail does not land up in your primary inbox and mark us as "Not Spam" to receive further updates from us directly in your inbox.
				<br/>Please do not hesitate to contact us at contact.gloiremun@gmail.com We look forward to seeing you at Gloire MUN 2016.
				<br/>Follow us on social media : <a href="http://www.twitter.com/GloireMun2016" target="_blank"><i class="icon-s-twitter"></i></a>
				<a href="http://www.facebook.com/GloireMUN" target="_blank"><i class="icon-s-facebook"></i></a>
				<a href="@GloireMUN" target="_blank"><i class="icon-s-instagram"></i></a>
				<a href="http://youtube.com/"><i class="icon-s-youtube"></i></a>
				</b></p></center>';
				
	//mailing script
	
	$email_message = "";
	$email_message .= "Dear ".$postdata['name'].",\n\n"; //dear name,
	$email_message .= "This is to confirm that we have received your application form.\n";
	$email_message .= "Thank you for applying as International Press Head/ Editor in Chief for Gloire MUN 2016. We will get in touch with you very soon.\n\n";
	$email_message .= "Please don't hesitate to contact us for of your queries. We look forward to seeing you at Gloire MUN 2016.\n\n";
	$email_message .= "Regards\n";
	$email_message .= "Secretariat\n";
	$email_message .= "Gloire MUN 2016\n";
	$email_message .= "F: http://www.facebook.com/GloireMUN\n";
	$email_message .= "T: http://www.twitter.com/GloireMun2016\n";
	$email_message .= "Y: http://youtube.com/\n";
	$email_message .= "G: contact.gloiremun@gmail.com\n";
	$email_message .= "M: +91-9769678524 | +91-8108892611 \n";
	
	$to = $postdata['email'] ;
    $subject = "International Press Head/ Editor in Chief application for Gloire MUN 2016";
    $headers = "From: Gloire MUN <contact.gloiremun@gmail.com>\r\n";
    $headers .= "Reply-To: contact.gloiremun@gmail.com \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1" . "\r\n";

    mail($to, $subject, $email_message, $headers,"-f contact.gloiremun@gmail.com");
				?>
		</div>
		<div class="span2"></div>
        </div>
      </div>
      <!-- /.container --> 
    </div>
    <!-- /.light-wrapper --> 
  </div>
  <!--/.primary-->
  <div class="push"></div>
</div>
<!--/.body-wrapper-->
<footer class="black-wrapper">
 <?php include('footer.php');?>
</footer>
<!--/footer --> 
<script src="style/js/jquery.js"></script> 
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/twitter-bootstrap-hover-dropdown.min.js"></script> 
<script src="style/js/jquery.themepunch.plugins.min.js"></script> 
<script src="style/js/jquery.themepunch.revolution.min.js"></script>
<script src="style/js/jquery.fitvids.js"></script> 
<script src="style/js/jquery.slickforms.js"></script> 
<script src="style/js/jquery.isotope.min.js"></script> 
<script src="style/js/view.min9df2.js?auto"></script> 
<script src="style/js/jquery.sticky.js"></script> 
<script src="style/js/google-code-prettify/prettify.js"></script> 
<script src="style/js/scripts.js"></script>
<!-- DEMO ONLY -->
<link rel="alternate stylesheet" type="text/css" href="switcher/blue.css" title="rufioblue-color" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="switcher/gray.css" title="rufiogray-color" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="switcher/green.css" title="rufiogreen-color" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="switcher/orange.css" title="rufioorange-color" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="switcher/pink.css" title="rufiopink-color" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="switcher/yellow.css" title="rufioyellow-color" media="screen" />
<script type="text/javascript" src="switcher/switchstylesheet.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
	$(".changecolor").switchstylesheet( { seperator:"color"} );
});
</script>
</body>
</html>