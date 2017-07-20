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
		<h3>United Nations Security Council</h3>
		<br/>
		</div>
		
		<div class="row">
          	
		  <div class="span6">
            <ul id="myTab" class="nav nav-tabs bm0">
              <li class="active"><a href="#tab1" data-toggle="tab" style="color:#ffffff;"><span style="color:#000000;">This is</span></a></li>
              <li><a href="#tab2" data-toggle="tab"><span style="color:#000000;">Committee Strength</span></a></li>
              <li><a href="#tab3" data-toggle="tab"><span style="color:#000000;">Agenda</span></a></li>
			  <li><a href="#tab4" data-toggle="tab"><span style="color:#000000;">Country matrix</span></a></li>
            </ul>
            <!-- /.nav-tabs -->
            <div id="myTabContent" class="tab-content">
			  <div class="tab-pane fade in active" id="tab1">
			    <p>The <b>United Nations Security Council (UNSC)</b> is one of the six principal organs of the United Nations and is charged with the maintenance of international peace and security as well as accepting new members to the United Nations and approving any changes to its United Nations Charter. 
				Its powers include the establishment of peacekeeping operations, the establishment of international, and the authorization of military action through Security Council resolutions; it is the only UN body with the authority to issue binding resolutions to member states. The Security Council held its first session on 17 January 1946.
				</p>
				<p>Like the UN as a whole, the Security Council was created following World War II to address the failings of another international organization, the League of Nations, in maintaining world peace
				</p>
			  </div>
              <!-- /.tab-pane -->
              <div class="tab-pane fade" id="tab2">
			     <p>20 Delegates</p>
			  </div>
              <!-- /.tab-pane -->
              <div class="tab-pane fade" id="tab3">
				<ol>
					<li><b>De-escalating Tensions in the South China Sea</b></li>
					<li><b>Situation in the Middle East with Special Emphasis on Iraq and Syria</b></li>
				</ol>
			  </div>
              <!-- /.tab-pane -->
			  <div class="tab-pane fade" id="tab4">
				<a href="style/images/country matrix.xls" download>Click here to download country matrix.</a>
			  </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content --> 
          </div>
		  
		  <div class="span1"></div>
		  <div class="span5">
			<br/>
            <img src="style/images/art/p12.jpg" alt="" />
          </div>
          <!-- /.span6 --> 
		  
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