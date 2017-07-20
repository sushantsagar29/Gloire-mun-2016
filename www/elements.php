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
		<h3>Random page</h3>
        <p>Duis non lectus sit amet est imperdiet cursus elementum vitae eros. <span class="lite">This is hightlight</span> morbi vitae magna tellus, ac mattis urna. Cras quis odio in risus euismod suscipit. Fusce viverra ligula vel justo bibendum semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros cras mattis.</p>
        <p>Duis non lectus sit amet est imperdiet cursus elementum vitae eros. <span class="lite">This is hightlight</span> morbi vitae magna tellus, ac mattis urna. Cras quis odio in risus euismod suscipit. Fusce viverra ligula vel justo bibendum semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros cras mattis.</p>
        <p>Duis non lectus sit amet est imperdiet cursus elementum vitae eros. <span class="lite">This is hightlight</span> morbi vitae magna tellus, ac mattis urna. Cras quis odio in risus euismod suscipit. Fusce viverra ligula vel justo bibendum semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros cras mattis.</p>
        <p>Duis non lectus sit amet est imperdiet cursus elementum vitae eros. <span class="lite">This is hightlight</span> morbi vitae magna tellus, ac mattis urna. Cras quis odio in risus euismod suscipit. Fusce viverra ligula vel justo bibendum semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros cras mattis.</p>
        		</div>
		
		<?php ?>
        <div class="row">
          <div class="span6">
            <h3>Tabs</h3>
            <ul id="myTab" class="nav nav-tabs bm0">
              <li class="active"><a href="#tab1" data-toggle="tab">This is</a></li>
              <li><a href="#tab2" data-toggle="tab">Tabbed</a></li>
              <li><a href="#tab3" data-toggle="tab">Content</a></li>
            </ul>
            <!-- /.nav-tabs -->
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="tab1">
                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna.</p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane fade" id="tab2">
                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum.</p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane fade" id="tab3">
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              </div>
              <!-- /.tab-pane --> 
            </div>
            <!-- /.tab-content --> 
          </div>
          <!-- /.span6 -->
          <div class="span6">
            <h3>Toggle</h3>
            <div class="accordion" id="accordion">
              <div class="accordion-group">
                <div class="accordion-heading"> <a class="accordion-toggle active btn" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> 100% Responsive </a> </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea. </div>
                </div>
              </div>
              <!-- /.accordion-group -->
              <div class="accordion-group">
                <div class="accordion-heading"> <a class="accordion-toggle btn" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> Clean & Professional Design </a> </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner"> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </div>
                </div>
              </div>
              <!-- /.accordion-group -->
              <div class="accordion-group">
                <div class="accordion-heading"> <a class="accordion-toggle btn" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Retina-ready Graphics </a> </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner"> Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. </div>
                </div>
              </div>
              <!-- /.accordion-group --> 
            </div>
            <!-- /.accordion --> 
            
          </div>
          <!-- /.span6 --> 
          
        </div>
        <!-- /.row -->
        <hr />
        <div class="row">
          <div class="span6">
            <h3>Alerts</h3>
            <div class="alert"> <strong>Warning!</strong> Best check yo self, you're not looking too good. </div>
            <div class="alert alert-error"> <strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
            <div class="alert alert-success"> <strong>Well done!</strong> You successfully read this important alert message. </div>
            <div class="alert alert-info"> <strong>Heads up!</strong> This alert needs your attention, but it's not super important. </div>
          </div>
          <!-- /.span6 -->
          <div class="span6">
            <h3>Alerts with Dismiss</h3>
            <div class="alert">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Warning!</strong> Best check yo self, you're not looking too good. </div>
            <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Well done!</strong> You successfully read this important alert message. </div>
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Heads up!</strong> This alert needs your attention, but it's not super important. </div>
          </div>
          <!-- /.span6 --> 
        </div>
        <!-- /.row -->
        <hr />
        <h3>Buttons</h3>
         <a href="#" class="btn btn-yellow">Button</a> <a href="#" class="btn btn-blue">Button</a> <a href="#" class="btn btn-gray">Button</a> <a href="#" class="btn btn-green">Button</a> <a href="#" class="btn btn-pink">Button</a><a href="#" class="btn btn-orange">Button</a>
        <hr />
        <div class="row">
          <div class="span4">
            <h3>Unordered List</h3>
            <ul>
              <li>Pellentesque non diam et tortor dignissim. </li>
              <li>Neque sit amet mauris egestas quis mattis. </li>
              <li>Cras justo odio, dapibus ac facilisis.</li>
              <li>Curabitur viver justo sed scelerisque.</li>
              <li>Aenean lacinia bibendum nulla sed consectetur.</li>
              <li>Nullam quis risus eget urna mollis ornare.</li>
            </ul>
          </div>
          <!-- /.span4 -->
          <div class="span4">
            <h3>Ordered List</h3>
            <ol>
              <li>Pellentesque non diam et tortor dignissim. </li>
              <li>Neque sit amet mauris egestas quis mattis. </li>
              <li>Curabitur viver justo sed scelerisque.</li>
              <li>Condimentum aenean risus malesuada tortor.</li>
              <li>Integer posuere erat a ante venenatis dapibus.</li>
              <li>Aenean eu leo quam. Pellentesque ornare.</li>
            </ol>
          </div>
          <!-- /.span4 -->
          <div class="span4">
            <h3>Misc Typography</h3>
            <p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet<br />
              <em>This is emphasised text</em><br />
              <strong>This is strong text</strong><br />
              <abbr title="This is an abbr - &lt;abbr&gt;&lt;/abbr&gt;">This is an abbr</abbr><br />
              <del>This is deleted text</del><br />
              <a href="#">This is a link</a> </p>
          </div>
          <!-- /.span4 --> 
        </div>
        <!-- /.row -->
        <hr />
        <h3>Blockquote</h3>
        <blockquote>
          <p> Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </blockquote>
        <hr />
        <h3>Dropcap</h3>
        <p><span class="dropcap">D</span>uis non lectus sit amet est imperdiet cursus elementum vitae eros. Cras quis odio in risus euismod suscipit. Fusce viverra ligula vel justo bibendum semper. Nulla facilisi. Donec interdum, enim in dignissim lacinia, lectus nisl viverra lorem, ac pulvinar nunc ante at neque. Proin et dui eros, at aliquet est. Pellentesque consectetur lectus quis enim mollis ut convallis urna malesuada. Sed tincidunt interdum sapien vel gravida. Nulla a tellus lectus, in aliquet tellus. Donec aliquam.</p>
        <hr />
        <h3>Hightlights</h3>
        <p>Duis non lectus sit amet est imperdiet cursus elementum vitae eros. <span class="lite">This is hightlight</span> morbi vitae magna tellus, ac mattis urna. Cras quis odio in risus euismod suscipit. Fusce viverra ligula vel justo bibendum semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros cras mattis.</p>
        <hr />
        <h3>Code Display</h3>
        <pre class="prettyprint linenums">
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;legend&gt;Legend&lt;/legend&gt;
    &lt;label&gt;Label name&lt;/label&gt;
    &lt;input type="text" placeholder="Type something…"&gt;
    &lt;span class="help-block"&gt;Example block-level help text here.&lt;/span&gt;
    &lt;label class="checkbox"&gt;
      &lt;input type="checkbox"&gt; Check me out
    &lt;/label&gt;
    &lt;button type="submit" class="btn"&gt;Submit&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre>
        <!-- /.prettyprint --> 
        <??>
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