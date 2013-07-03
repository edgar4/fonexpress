<?php include("includes/header.php");?>
<body>
<div class="container"> 
  
  <!--end top drop down-->
  <div class="logo"><img src="<?php echo base_url();?>images/logo.png"/></div>
  <div class="latest">
    <p class="slide"><a href="#" class="btn-slide"></a></p>
    <div id="slide-panel"> 
      <!--This is the START of the follow section-->
    <?php include("includes/droppage.php");?>
    </div>
    <!--END of follow section--> 
  </div>
  <div class="clearfix"></div>
  <div class="holder">
    <div class="menu-cont">
 <?php include("includes/navigation.php");?>
    </div>
    <!--menu end-->
    <div class="custom-gl">
      <div class="google"> 
        <script>
  (function() {
    var cx = '001945735223293262065:ixl_4vc3oz0';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
        <gcse:search></gcse:search>
      </div>
    </div>
  </div>
  <!--holder-->
  <header id="h">
 <?php //include("includes/slider.php");?>
    <div class="border">.</div>
   <h3 class="spot">Our <span>Spotlight</span></h3>
    <div class="thumb-cont">
      <?php include("includes/thumbs.php");?>
    </div>
    <!--thumbs--> 
  </header>
  <div id="content">
    <aside id="sidebar">
<?php include("includes/sidebar.php");?>
    </aside>
    <!--aside end-->
    <article id="prime"> 
      <!-- START CONTENT -->
<?php include("includes/camera_content.php");?>
      <!-- END CONTENT --> 
    </article>
  </div>
<?php include("includes/footer.php");?>
</div><!--application end-->
</body>
</html>