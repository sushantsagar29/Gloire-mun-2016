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
		<h3>Resources</h3>
			<div class="span2"></div>
			<div class="span8">
				<table class="table table-bordered table-hover">
			<tbody>
				<tr>
					<td>
						<p>Study guides : </p>
						<span style="padding:10px;"><a href="style/docs/Gloire MUN UNHRC.pdf" download class="btn-success">UNHRC</a></span>
						<span style="padding:10px;"><a href="#" class="btn-success">UNSC</a></span>
						<span style="padding:10px;"><a href="style/docs/Gloire MUN DISEC.pdf" download class="btn-success">DISEC</a></span>
					</td>
					<td><a href="style/docs/Rules of Procedure.pdf" download>Click here to download Rules of procedure</a></td>
				</tr>
				<tr>
					<td><a href="#" >Click here to download Itinerary</a></td>
					<td><a href="#" target="_blank">Click here to download Allotments</a></td>
				</tr>
			</tbody>
		</table>
			</div>
			<div class="span2"></div>
        </div><!--./row-->
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