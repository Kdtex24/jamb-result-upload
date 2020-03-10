<?php 
session_start()
?>
<?php
require_once('backend/dbConfig.php');
require_once('backend/upload_assets.php');
require_once('backend/token_validate.php');
?>
    
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Uploading Page</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords"
              content="faceof24loade, 24loaded.com, peagent, beauty" />
        <!-- //Meta tag Keywords -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css"/>
</head>
<body>
   <!-- /form-26-section -->
   <section class="signin-form">
            <div class="overlay">
				<div class="wrapper">
			<div class="logo text-center top-bottom-gap">
                        <img class="brand-logo" src="images/banner.jpg" alt="img">
                    </div>
					<div class="form34">
                        <form method='POST' action="success" enctype="">
                            <div class="">
                                <p class="text-head">Full Name</p>
                                <input id="fullName" type="text" name="fullname" class="input" placeholder="e.g John Doe obi" required="" />
                            </div>
                            <div class="">
                                <p class="text-head">Email</p>
                                <input id="email" type="email" name="email" class="input" placeholder="e.g@gmail.com" required="" />
                            </div>
                            <div class="">
                                <p class="text-head">Phone</p>
                                <input id="phone" type="text" name="phone" class="input" placeholder="e.g +234704352467" required="" />
                            </div>
                            <div class="">
                                <p class="text-head">JAMB Reg. No</p>
                                <input id="reg_no" type="text" name="reg_no" class="input" placeholder="e.g 65342679ag" required="" />
                            </div>
                            <div class="">
                                <p class="text-head">Profile Code</p>
                                <input id="profile_code" type="text" name="profile_code" class="input" placeholder="e.g 6454633" required="" />
                            </div>
                            <button name="submit" type="submit" style="width: 100%; border-radius: 19px; color: black;" class="btn btn-success">
                                <i class="fa fa-sign-in"> </i>Submit
                            </button>
                            <a href="index" style="margin-top: 10px; width: 100%; border-radius: 19px; color: black;" class="btn btn-success">
                                <i class="fa fa-home"> </i> Home
                            </a>
                        </form>
                    </div>
                </div>
					<div class="copyright text-center">
                    <p>© 2020 CKTELLER. All rights reserved | Design by <a href="http://ww.facebook.com/kedeayei"
                            target="_blank">CyberCraft Technologies</a></p>
                </div>
                </div>
			</div>
		</div>
		    </div>
		    <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/dataTables.bootstrap.min.js"></script>
            <script src="js/jquery.dataTables.min.js"></script>
            <script src="js/sweetalert.min.js"></script>
            <script src="js/sweetalert.init.js"></script>
            <!--<script src="js/kdtex.js"></script>-->
		</section>
</body>
</html>