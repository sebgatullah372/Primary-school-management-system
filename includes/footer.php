<?php
$sql="SELECT * FROM School_info";
		$result= $db->query($sql);
		if($result){
		while($data=$result->fetch_object())
		{
			$address= $data->address;
			$telnum= $data->telnum;
			$email= $data->email;
		//echo "<div class=\"well well-lg\" style=\"width: 450px\">".$data->School_Information."</div></div>";
		//echo $data->School_Information;
		}
		}
		else{
		echo"No Data Found";
    }
    ?>   
    <footer id="footer">
 
    <div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="contact.php">
                Contact Info 
              </a>
            </li>
            <li><a href="#">
                News & Events
              </a>
            </li>
            <li><a href="#">
                Copyright
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Quick Links
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="school_information.php">
                School Information
              </a>
            </li>
            <li><a href="teachers_information.php">
                Teachers
              </a>
            </li>
            <li><a href="gallery.php">
                Gallery
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
              <div class="footerwidget"> 
                         <h4>Address Of School</h4> 
                        <p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> <?php echo $address; ?><br>
            <i class="fa fa-phone"></i><?php echo $telnum; ?> <br>
             <i class="fa fa-envelope-o"></i> <?php echo $email; ?>
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>

      <div class="clear"></div>
      <!--CLEAR FLOATS-->
    </div>
    <div class="footer2">
      <div class="container">
        <div class="row">

          <div class="col-md-6 panel">
            <div class="panel-body">
              <p class="simplenav">
                <a href="index.php">Home</a> | 
                <a href="school_information.php">About</a> |
                <a href="notice.php">Notice Board</a> |
                <a href="">Information</a> |
                <a href="">Results</a> |
                <a href="">Contact</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 panel">
            <div class="panel-body">
              <p class="text-right">
                Copyright &copy; Arnob
              </p>
            </div>
          </div>

        </div>
        <!-- /row of panels -->
      </div>
    </div>
  </footer>

  <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="assets/js/modernizr-latest.js"></script> 
  <script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
  <script src="assets/js/custom.js"></script>
    <script>
    jQuery(function(){
      
      jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
        height: '600',
        loader: 'false',
        pagination: true,
        thumbnails: false,
        hover: false,
                playPause: false,
                navigation: false,
        opacityOnGrid: false,
        imagePath: 'assets/images/'
      });

    });
      
  </script>

     
    
</body>
</html>