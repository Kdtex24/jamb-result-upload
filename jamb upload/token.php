<?php
require_once('backend/dbConfig.php');
require_once('backend/token_validate.php');
?>
    
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>uploadin Portal</title>
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
                        <form method='GET' action="register" enctype="multipart/form-data">
                            <div class="">
                                <center><p class="text-head">ENTER TOKEN TO PROCEED</p></center>
                                <input id="token" type="pin" name="token" class="input" placeholder="e.g 34567757" required="" />
                            </div>
                            <button name="Proceed" type="submit" style="width: 100%; border-radius: 19px; color: black;" class="btn btn-success">
                                <i class="fa fa-sign-in"> </i>Proceed
                            </button>
                            <a href="index" style="margin-top: 10px; width: 100%; border-radius: 19px; color: black;" class="btn btn-success">
                                <i class="fa fa-bank"> </i>Buy Token
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
           