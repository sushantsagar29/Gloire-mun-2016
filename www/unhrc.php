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
		<h3>United Nations Human Rights Council</h3>
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
				<p>The <b>United Nations Human Rights Council (UNHRC)</b> is a United Nations System inter-governmental body whose 47 member states are responsible for promoting and protecting human rights around the world. 
				The UNHRC has addressed conflicts including the Israeli-Palestinian conflict and also addresses rights-related situations in countries such as in Burma, Guinea, North Korea, Côte d'Ivoire, Kyrgyzstan, Syria, Libya, Iran, and Sri Lanka. 
				The UNHRC also addresses important thematic human rights issues such as freedom of association and assembly, freedom of expression, freedom of belief and religion, women's rights, LGBT rights, and the rights of racial and ethnic minorities</p>
			  </div>
              <!-- /.tab-pane -->
			   <div class="tab-pane fade" id="tab2">
			     <p>55 Delegates</p>
			  </div>
              <!-- /.tab-pane -->
              <div class="tab-pane fade" id="tab3">
				<ol>
					<li><b>Human Rights Violations in Conflict and Post-Conflict Areas.</b></li>
					<li><b>Protecting the Rights of the LGBT Community</b></li>
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
            <img src="style/images/art/p10.jpg" alt="" />
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