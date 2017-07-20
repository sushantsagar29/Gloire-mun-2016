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
          <div class="span8">
            <h2>Feel Free to Drop Us a Line</h2>
            <div class="divide20"></div>
            <div class="form-container">
              <div class="response alert alert-success"></div>
              <form class="forms" id="contact_form" action="" method="post" autocomplete="true">
                <fieldset>
                  <ol>
					<div id="message" class="alert alert-error" style="color:#e03215;"></div><br/>
                    <li class="form-row text-input-row name-field">
                      <input type="text" name="name" class="text-input defaultText required" title="Name (Required)"/>
                    </li>
                    <li class="form-row text-input-row email-field">
                      <input type="text" name="email" class="text-input defaultText required email" title="Email (Required)"/>
                    </li>
                    <li class="form-row text-input-row subject-field">
                      <input type="text" name="subject" class="text-input defaultText" title="Subject (Required)"/>
                    </li>
                    <li class="form-row text-area-row">
                      <textarea name="message" class="text-area required" placeholder="Message/Suggestions/Grievances/Queries (Required)"></textarea>
                    </li>
                    <li class="button-row">
                      <input type="submit" value="Submit" name="submit" id="submit-btn" class="btn btn-submit bm0" />
                    </li>
                  </ol>
                </fieldset>
              </form>
            </div>
            <!-- /.form-container --> 
          </div>
          <!-- /.span8 -->
          <aside class="span4 sidebar lp20">
            <div class="sidebox widget">
              <h3>Address</h3>
              <i class="icon-address"></i>&nbsp;Conference Venue: Gokhale Edu Society’s SB Vartak College , MHB Colony, Gorai Road, Mumbai<br/><br/>
              <address>
			  <b>Nishant Padhy-Secretary General</b><br/>
              <abbr title="Phone"><i class="icon-phone-1"></i></abbr> +91-9769678524 <br>
			  <b>Yogesh Yadav-Deputy Secretary General</b><br/>
              <abbr title="Phone"><i class="icon-phone-1"></i></abbr> +91-8108892611 <br><br/>
              <abbr title="Email"><i class="icon-mail"></i></abbr> <a href="mailto:: contact.gloiremun@gmail.com">contact.gloiremun@gmail.com</a><br/>
			  <a href="http://www.twitter.com/MumbaiModelUN" target="_blank"><i class="icon-s-twitter"></i></a>
			  <a href="http://www.facebook.com/GloireMUN" target="_blank"><i class="icon-s-facebook"></i></a>
			  <a href="@MumbaiMUN" target="_blank"><i class="icon-s-instagram"></i></a>
			  <a href="http://youtube.com/user/MumbaiModelUN"><i class="icon-s-youtube"></i></a>
              </address>
            </div>
            <!-- /.widget --> 
          </aside>
          <!-- /.span4 --> 
        </div>
        <!-- /.row --> 
		<div class="divide50"></div>
		<center><div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15069.698194698425!2d72.7835937!3d19.2203206!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e4e6341a92a7efd!2sGokhale+Mahavidyalaya!5e0!3m2!1sen!2sin!4v1455453822129" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div></center>
		
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
	var data = $('#contact_form').serialize();
	var check=$.ajax({
	type:"post",
	url:"contactsub.php",
	data:data,
	contentType:"application/x-www-form-urlencoded",
	success: function(responseData, textStatus , jqXHR){
			$('#message').html(responseData);
	},
	error:function(textStatus, errorThrown){console.log(errorThrown);}
 });
 return false;
 });
	 
 });//end of document ready
 </script>
</html>