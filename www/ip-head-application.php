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
		<center><h2>International Press Head/ Editor in Chief Application</h2></center>
		</div>
		
		<div class="row">	
		<div class="span2"></div>
		<div class="span8">
		<i><center>
			<small>For assistance with the form, get in touch with us on +91-9769678524 or mail us at <a href="mailto:contact.gloiremun@gmail.com">contact.gloiremun@gmail.com</a></small>
		</center><br /></i>
		<form role="form" id="iphd_form" method="POST" action="iphdappsub.php" autocomplete="true">
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
				
				<b>Alterntive Contact No.</b>
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
				
				<b>Total Number of MUNs attended overall</b>
				<input name="muncount" placeholder="No of MUNs attended overall" type="text" maxlength="10" class="form-control" />
				<br>
				
				<b>Total Number of MUNs attended as an International Press Member<span style="color:#e03215;">*</span></b>
				<input name="ipcount" placeholder="No of MUNs attended" type="text" class="form-control" required/>
				<br>
				
				<b>Past MUN Experiences as an Intl. Press Member(FORMAT: Sl No.- Name of MUN- Committee- Country- Awards)<span style="color:#e03215;">*</span></b>
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
						
			<b>How does International Press plays an important role in a Model United Nations? Justify ( 250-300 words)	</b>
			<textarea name="que1" type="text" class="form-control" ></textarea><br />
				
			<b>Give links to any other articles or work as a member IP that you would like us to know about.
			If you wish to send photographs or files in .doc or .pdf format, send them to contact.gloiremun@gmail.com
			</b>
			<textarea name="que2" type="text" class="form-control" placeholder="(Each link in a separate line)"></textarea><br />
				
			<b>Describe yourself in 200-250 words</b>
			<textarea name="que3" type="text" class="form-control" ></textarea><br />
				
			<b>Write an article on the topic: Ongoing Situation in the Middle East with special focus on two contexts i.e. 1)Rights of Refugees 2) Your opinion to curb this crisis. 
			</b>
			<textarea name="que4" type="text" class="form-control" ></textarea><br />
			
			<b>State your views on the current situation of mass media in the nation (Word Limit: 150 words)</b>
			<textarea name="que5" type="text" class="form-control" ></textarea><br />
			
			<b>Any Experience in this field other than MUNs?</b>
			<textarea name="other_exp" type="text" class="form-control" ></textarea><br />
			</div>
			
			
			<div class="form-group">
			<br />
								
				<b>Anything else you would like us to know.</b>
				<textarea name="feedback" placeholder="Your suggestions/feedback is valuable to us." type="text" class="form-control"></textarea>
				
				<input name="agree" type="checkbox" class="form-control" />
				<b>I have read and understood the Conference Policies, and I hereby verify that the above information is true.
				I accept all terms outlined here and would follows all the rules while attending Gloire MUN 2016</b>
				
				<br><br>
				<div id="message" class="alert alert-error" style="color:#e03215;"></div><br/>
				<button id="submit-btn" type="submit" class="btn btn-success">Apply</button>
				<button type="reset" class="btn btn-warning">Reset</button>
			</div>
		</form>
		</div>
		<div class="span2"></div>
		
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
	var data = $('#iphd_form').serialize();
	var check=$.ajax({
	type:"post",
	url:"iphdvalidate.php",
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