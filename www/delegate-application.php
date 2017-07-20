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
		<center><h1>DELEGATE APPLICATIONS </h1></center>
		</div>
		
		<div class="row">	
		<div class="span2"></div>
		<div class="span8">
		<i><center>
			<small>For assistance with the form, get in touch with us on +91-9769678524 or mail us at <a href="mailto:contact.gloiremun@gmail.com">contact.gloiremun@gmail.com</a></small>
		</center><br /></i>
		<form role="form" id="delegate_form" method="POST" action="delappsub.php" autocomplete="true">
			
			<div class="form-group">
				<b>Name<span style="color:#e03215;">*</span></b>
				<input name="name" placeholder="Your Name" class="form-control" required type="text"/>
				<br>
								
				<b>Email Address<span style="color:#e03215;">*</span></b>
				<input name="email" placeholder="Email Id" type="email" class="form-control" required/>
				<br>
						
				<b>Contact No.<span style="color:#e03215;">*</span></b>
				<input name="contact" placeholder="Mobile no. (10 digit)" type="text" maxlength="10" class="form-control" required/>
				<br>
				
				<b>Alternative Contact No.</b>
				<input name="altcontact" placeholder="Mobile no. (10 digit)" type="text" maxlength="10" class="form-control" />
				<br>
				
				<b><span>Gender<span style="color:#e03215;">*</span></span></b><br>
				<select name="gender" class="form-control" required>
				<option selected value="m">Male</option>
				<option value="f">Female</option>
				<option value="o">Others</option>
				</select>
				<br>
				
				<b>Address<span style="color:#e03215;">*</span></b>
				<input name="address" placeholder="Address" type="text" class="form-control" required/>
				<br>
				
				<b>Date of Birth <span style="color:#e03215;">*</span></b>
				<input name="dob" placeholder="date of birth" type="date" class="form-control" required/>
				<br>
					
				<b>Name of Institute<span style="color:#e03215;">*</span></b>
				<input name="college" placeholder="School / College" type="text" class="form-control" required/>
				<br>
						
				<b>Course/Stream<span style="color:#e03215;">*</span></b>
				<input name="course" placeholder="Course/Stream" type="text" class="form-control" required/>
				<br>	
				
				<b>Year of Study/Class<span style="color:#e03215;">*</span></b>
				<input name="syear" placeholder="Year of Study" type="text" class="form-control" required/>
				<br>
				
				<b>Total Number of MUNs attended<span style="color:#e03215;">*</span></b>
				<input name="muncount" placeholder="No of MUNs attended (fill 0 if none)" type="text" maxlength="10" class="form-control" required/>
				<br>
				
				<b>Past MUN Experiences (FORMAT: Sl No.- Name of MUN- Committee- Country- Awards)<span style="color:#e03215;">*</span></b>
				<textarea name="experience" type="text" class="form-control" required></textarea><br />
				
				<b><span>Accommodation Required?<span style="color:#e03215;">*</span></span></b><br>
				<select name="accom" class="form-control" required>
					<option value="no" selected>No</option>
					<option value="yes">Yes</option>
				</select>
				<br />
			</div>
			
			
			
			<div class="form-group">
			<br />
			<b><span>Committee Preference<span style="color:#e03215;">*</span></span></b><br>
			<select  name="preference" class="form-control" required>
				<option value="UNSC" selected>United Nations Security Council</option>
				<option value="UNGA" >UNGA -Disarmament and International Security Committee</option>
				<option value="UNHRC" >United Nations Human Rights Council</option>
			</select><br />
			
			<b>Country Preference 1<span style="color:#e03215;">*</span></b>
			<input name="country1" placeholder="Country Preference 1" class="form-control" required type="text"/>
			<br>
				
			<b>Country Preference 2 <span style="color:#e03215;">*</span></b>
			<input name="country2" placeholder="Country Preference 2" class="form-control" required type="text"/>
			<br>
			
			</div>
			
			
			<div class="form-group">
			<br />
				<b><span>How would you like to pay for Gloire MUN 2016?<span style="color:#e03215;">*</span></span></b><br>
				<select name="payment" class="form-control" required>
				<option value="online" selected >Online Payment</option>
				<option value="neft">NEFT/ RTGS Transfer</option>
				<option value="offline">Offline Payment (Only available for Mumbai Residents)</option>
				</select>
				<br />
				
				<b><span>Would you like to join us for the Socials?<span style="color:#e03215;">*</span></span></b><br>
				<select name="socials" class="form-control" required>
				<option value="yes" selected >Yes</option>
				<option value="no">No</option>
				</select>
				<br />
				
				
				<b>Anything else you would like us to know.</b>
				<textarea name="feedback" placeholder="Your suggestions/feedback is valuable to us." type="text" class="form-control"></textarea>
				
				<input name="agree" type="checkbox" class="form-control" />
				<b>I have read and understood the Conference Policies, and I hereby verify that the above information is true.
				I accept all terms outlined here and would follows all the rules while attending Gloire MUN 2016</b>
				
				<br><br><div id="message" class="alert alert-error" style="color:#e03215;"></div>
				
				<br>
				<button id="submit-btn" type="submit" class="btn btn-success">Apply</button>
				<button type="reset" class="btn btn-warning">Reset</button>
			</div>
		</form>
		</div>
		<div class="span2"></div>
			
		</div><!--row end-->
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
<script type="text/javascript">
 $(document).ready(function(){
 $('#submit-btn').click(function(){
	var url = $(this).attr('action');
	var data = $('#delegate_form').serialize();
	var check=$.ajax({
	type:"post",
	url:"delvalidate.php",
	data:data,
	contentType:"application/x-www-form-urlencoded",
	success: function(responseData, textStatus , jqXHR){
		if(responseData == "OK") {
			$('form').submit();
			}
		else{
			$('#message').html(responseData);
			}
	},
	error:function(textStatus, errorThrown){console.log(errorThrown);}
 });
 return false;
 });
	 
 });//end of document ready
 </script>
</html>