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
		<h3>United Nations General Assembly - DISEC </h3>
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
				<p>Disarmament and International Security is the First Committee of the United Nation's General Assembly. 
				The First Committee deals with disarmament, global challenges and threats to peace that affect the international community and seeks out solutions to the challenges in the international security regime.
				</p>
				<p>UNGA - DISEC - The General Assembly (GA) is the main deliberative of the UN. 
				By Article 10, Chapter IV of the United Nations Charter it is mandated to make recommendations to the Member Nations or to the Security Council on any matter of international significance or matters relating to all the other organs of the UN including admission of new Members Nations to the UN, and selection of Members for other organs of the United Nations. 
				Every Member Nation of the UN is treated equally in this body by virtue of holding one vote.</p>
			  </div>
              <!-- /.tab-pane -->
			   <div class="tab-pane fade" id="tab2">
			     <p>70 Delegates</p>
			  </div>
              <!-- /.tab-pane -->
              <div class="tab-pane fade" id="tab3">
				<ol>
					<li><b>Methods to curb proliferation of nuclear, chemical and biological weapons</b></li>
					<li><b>Demilitarisation of the Arctic</b></li>
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
            <img src="style/images/art/p6.jpg" alt="" />
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