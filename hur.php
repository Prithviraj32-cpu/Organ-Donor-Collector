<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>OrgDon</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@orgdon.com</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">24X7</a></span>	
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a href="hhomepage.php">Home</a></li>
                        <li><a data-scroll href="hvd.html">View Donors</a></li>
                        <li><a class="active" data-scroll href="hur.php">Update Request Status</a></li>
                        <li><a data-scroll href="hupdate.php">Update Info.</a></li>
						<li><a data-scroll href="hchangepass.html">Change Password</a></li>
                        <li><a data-scroll href="hlogout.php">Logout</a></li>
                     </ul>
                  </div>
               </nav>
               
            </div>
         </div>
      </header>
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">
                     <h2>
                        <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to OrgDon", "Donate Organs to Save Others", "Request for Organ" ]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="time-table" class="time-table-section">
         <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time one" style="background:#2895f1;">
                     <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                     <h3>Donate Organs</h3>
                     <p>Donate Organs to Save Others.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time middle" style="background:#0071d1;">
                     <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 
                     <h3>Working Hours</h3>
                     <div class="time-table-section">
                        <ul>
                           <li><span class="left">Monday - Friday</span><span class="right">12.00 AM – 12.00 PM</span></li>
                           <li><span class="left">Saturday</span><span class="right">12.00 AM – 12.00 PM</span></li>
                           <li><span class="left">Sunday</span><span class="right">12.00 AM – 12.00 PM</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time three" style="background:#0060b1;">
                     <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                     <h3>Request Organs</h3>
                     <p>To Save Life.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  <?php
	error_reporting(0);
	session_start();
	?>
      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>OrgDon</h2>
            </div>
            <!-- end title -->
            <div class="row">
			<h2>Update Organ Request Status</h2>
               
              <table id="customers" border="1" cellpadding="5" cellspacing="5">
				  <tr>
				  <th>Organ Request ID
					<th>Hospital Name
					<th>Organ Type
					<th>Requested By
					<th>Address
					<th>Contact Number
					
					</tr>
					<?php
					error_reporting(0);
					session_start();
					$host="localhost";
					$db="od";
					$user="root";
					$pass="";

					$conn = new mysqli($host, $user, $pass, $db);
					
					$username=$_SESSION["hun"];
										
					$sql="select * from ordet where username='$username' and astatus='Approve'";

					$result = $conn->query($sql);

					while($row = $result->fetch_assoc())
					{
						$orid=$row["orid"];
						$id=$row["fname"];
						$pname=$row["otype"];
						$pcat=$row["ufname"];
						$pdesc=$row["uaddr"];
						$ucno=$row["ucno"];
						
						echo "<tr>";
						echo "<td>".$orid;
						echo "<td>".$id;
						echo "<td>".$pname;
						echo "<td>".$pcat;
						echo "<td>".$pdesc;
						echo "<td>".$ucno;
						echo "<td><a href='hur1.php?id=".$orid."'>Update Status</a>";
						
						
						
						echo "</tr>";
					}
					?>
					</table>
               
            </div>
            <!-- end row -->
            <hr class="hr1">
            
         </div>
         <!-- end container -->
      </div>
      
      
      
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/logo.png" alt=""></a>
                     <p>Donate Organs so that It can Save Many Lives.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> Kumaraswamy Layout Bangalore</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@orgdon.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> 
	</p>
                  </div>
               </div>
               
            </div>
         </div>
      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>© 2022 OrgDon. All Rights Reserved.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  
               </div>
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>