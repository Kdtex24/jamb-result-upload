<?php
require_once('backend/dbConfig.php');
require_once('backend/generate_assets.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>TOKEN generator</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords"
              content="upload, O'Level results" />
        <!-- //Meta tag Keywords -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css"/>
        <!-- font-awesome-icons -->
        <style type="text/css">
            .list-margin{
                margin-bottom: 15px;
            }
        </style>
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
                <!-- Horizontal Form Content -->
               <form class='' id='login' method='POST' action='token_generator.php'>
                    <br />
                                <p id='generate'><input type='submit' name='generate' id='generate' value='Generate Token' class='btn btn-large btn-success login_btn text-center' /></p>


                            </form>
                        
                        
                <!-- END Horizontal Form Content -->
            </div>
</div>