<?php include 'header.php';?>

<div class="tp-breadcrumb"><!-- tp-breadcrumb -->
  <div class="container">
    <div class="col-md-offset-3 col-md-5">
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Contact us</li>
      </ol>
    </div>
  </div>
</div>
<!-- /.tp-breadcrumb -->

<div id="main-wrapper" class="main-wrapper"><!-- main-wrapper -->
  <div id="tp-contact-page" class="tp-contact-page"><!-- contact -->
    <div class="container">
      <div class="row">
        <div class="col-md-10 tp-page-title"><!-- page-title -->
          <h1>Get In Touch</h1>
          <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lorem ipsum dolor sit amet labore et dolore aliquaUt enim ad minim veniam quis nostrud exercitation ullamco dorlor sit amet laboris nisi.</p>
        </div>
        <!-- /.page-title --> 
      </div>
      <div class="row tp-contact-form"><!-- contact-form -->
           <form class="form-contact" name="contact" method="post" action="connection.php">
            
            <!-- Text input-->
            <div class="form-group">
              <div class="col-md-6">
                <label class="control-label" for="fname">First Name</label>
                <input id="fname" name="fname" type="text" placeholder="" class="form-control input-md" required>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <div class="col-md-6">
                <label class="control-label" for="lname">Last Name</label>
                <input id="lname" name="lname" type="text" placeholder="" class="form-control input-md" required>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <div class="col-md-6">
                <label class="control-label" for="email">E-mail</label>
                <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <div class="col-md-6">
                <label class="control-label" for="selectbasic">Select Option</label>
                    <select id="selectbasic" name="product" class="form-control">
                      <option value="Tee">Tee</option>
                      <option value="cap">Cap</option>
                      <option value="Elbow">Elbow</option>
                      <option value="Reducer">Reducer</option>
                    </select>
              </div>
            </div>
            
            <!-- Textarea -->
            <div class="form-group">
              <div class="col-md-12">
                <label class="control-label" for="textarea">Message</label>
                <textarea class="form-control" id="textarea" rows="9" name="message"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <button name="" class="btn btn-submit">Submit</button>
            </div>
          </form>
        </div><!-- /.contact-form -->
      <div class="row">
      	<div class="col-md-12">
        <div class=" tp-contact-block"><!-- contact-block -->
        	<div class="row ">
            	<div class="col-md-6">
                	<h2>Sales Office</h2>
                    <ul>
                    	<li><i class="fa fa-map-marker"></i>  Plot No. &nbsp; 1353, &nbsp; 1354, &nbsp; 1355, &nbsp; Opp. Ganpati Karkhana,
							<br> Road No. 15, &nbsp; Kalamboli, &nbsp; Navi Mumbai, &nbsp; Raigad. 410218</li>
						<li><i class="fa fa-phone"></i>  (022) &nbsp; 27421475 &nbsp; / &nbsp; 27421474 </li>
                        <li><i class="fa fa-fax"></i>  (022) &nbsp; 23735795 </li>
						<li><i class="fa fa-user"></i> Mohd. Haroon Khan (Proprietor) </li>
						<li><i class="fa fa-mobile" style="font-size: 21px;"></i> 9930667501 &nbsp; / &nbsp; 9833027708</li>
						<li><i class="fa fa-envelope"></i> <a href="mailto:hancopipefittings@gmail.com"> hancopipefittings@gmail.com </a> </li>
                    </ul>
                </div>
                <div class="col-md-6">
                	<h2>Registered Office</h2>
                    <ul>
                    	<li><i class="fa fa-map-marker"></i> Plot No. &nbsp; 1354, &nbsp; Opp. Ganpati Karkhana, &nbsp; Road No. 15, 
							<br> Kalamboli, &nbsp; Navi Mumbai, &nbsp; Raigad.410218 </li>
						<li><i class="fa fa-phone"></i>  (022) &nbsp; 27421475 &nbsp; / &nbsp; 27421474 </li>
                        <li><i class="fa fa-fax"></i>  (022) &nbsp; 23735795 </li>
						<li><i class="fa fa-user"></i> Mohd. Nafis Khan </li>
						<li><i class="fa fa-mobile" style="font-size: 21px;"></i> 9869055795</li>
						<li><i class="fa fa-envelope"></i> <a href="mailto:mntubecorporation@gmail.com"> mntubecorporation@gmail.com </a> </li>
                    </ul>
                </div>
               <!-- class="col-md-4">
                	<h2>Corporate Office</h2>
                    <ul>
                    	<li><i class="fa fa-map-marker"></i>34 Stirling Street, Perth,<br> WA Suite 508 Camberra, <br>Australia - 4006 </li>
                        <li><i class="fa fa-phone"></i>(022) 1234 5897</li>
                        <li><i class="fa fa-fax"></i>(022) 1234 5897</li>
                    </ul>
                </div-->
        	</div>
            </div>
        </div><!-- /.contact-block -->
      </div>
      <div class="row">
      	<div class="col-md-12 tp-contact-map"><!-- contact-map -->
        	<h2>Locations &amp; Map</h2>
            <img src="images/contact.png" class="img-responsive" alt="">
        </div><!-- /.contact-map -->
      </div>
    </div>
  </div>
  <!-- /.contact --> 
</div>
<!-- /.main-wrapper --> 
<?php include 'footer.php';?>
