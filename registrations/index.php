<?php
  session_start();
  
  if(isset($_SESSION['Username'])){
    header('Location: logged.php');
  }

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
<!-- start header_bottom -->
<style type="text/css">
  a:link{color:white;}
  a:visited{color:white;}
  a:hover{color:#428BCA;}
</style>
<link rel="stylesheet" type="text/css" href="header/header.css">
<script src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>
  <link rel="stylesheet" href="../css/home/bootstrap-3.3.6-dist/css/bootstrap.css">
  <link href='../css/home/fonts.css' rel='stylesheet' type='text/css'>
 <script src="../js/home/jquery.min.js"></script>
  <script src="../css/home/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
  <script src="../js/home/modernizr.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../css/home/3d-rotating-navigation/css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="../css/home/3d-rotating-navigation/css/style.css"> <!-- Resource style -->
  <script src="../css/home/3d-rotating-navigation/js/modernizr.js"></script> <!-- Modernizr -->
<link rel="shortcut icon" href="fav.ico">
    </head>
<body style="overflow-x: hidden;">
    <div class="header-bottom">
    <nav class="cd-3d-nav-container fixed">
    <ul class="cd-3d-nav">
      <li>
        <a href="home.php"class="3d-rotating-navigation/css/style.css">Home</a>
      </li>
      <li>
        <a href="about.php">About Us</a>
      </li>
      <li class="cd-selected">
        <a href="events.php">Events and Attractions</a>
      </li>
      <li>
        <a href="idpt.php">IDPT</a>
      </li>
      <li>
        <a href="blog.php">Blog</a>
      </li>
      <li>
        <a href="team.php">Team</a>
      </li>
      <li>
        <a href="sponsors.php">Sponsors</a>
      </li>
      <li>
        <a href="contact.php">Contact Us</a>
      </li>
    </ul> <!-- .cd-3d-nav -->
    <span class="cd-marker color-1"></span> 
  </nav> <!-- .cd-3d-nav-container -->
  <!-- for back to top-->
<header class="cd-header">
    <a href="#0" class="cd-logo"><img src="img/logo.png" alt="Logo"></a>
    <a href="#0" class="cd-3d-nav-trigger">
      Menu
      <span></span>
    </a>
  </header></div>
    <div class="main">
    <div class="col-md-2">
      <div class="header-bottom_left">
      <?php  if(!isset($_SESSION['Username']))       { ?>
        <span style="font-size:100%;" class="flk"><a href="login.php" style="color:#000;"class="btn btn-default">Login</a> |<a style="color: #000;" href="index.php"  class="btn btn-default"> Register</a></span>
        <?php 
  } else {
    $na=$_SESSION['Username'];
    echo'<span>Welcome ';
    echo $na;
    echo '</span> &nbsp;&nbsp;<a href="http://www.djtrinity.in/registrations/logout.php">Logout</a>   ';
  }

  ?>
      </div>
     </div><div class="row"><br><br><br><br></div>
   <div class="row">
   <div class="col-sm-5"></div>
   <div class="col-sm-2"><h1 style="color:white;font-size:200%;left:20px;">Registration</h1></div>
   <div class="col-sm-5"></div>
   <br><br>
      <br><br>
      <div class="container">
      <div class="col-md-4">
      </div>
       <div class="col-md-4">
       <a href="colgreg.php" style="background-color: #3bafda;color: #ffffff;text-decoration: none;padding-left: 15px; padding-right: 18px;" class="btn primary"><h3 style="font-weight: bolder;font-size: 24px;">  For DJ Sanghvi Students   </h3></a><br><br>
       </div>
      </div>
    <div class="container">
    <div class="col-md-4">
      </div>  
     <div class="col-md-4">
       &nbsp;&nbsp;<a href="otherclgreg.php" style="background-color: #ff4d4d;color: #ffffff;text-decoration: none;" class="btn primary"><h4 style="font-weight: bolder;font-size: 24px;">For Outhouse Students</h4></a><br><br>
     </div>
    </div>
   <br><br>
      <div class="container">
      <div class="col-sm-1"></div>
      <div class="col-md-4">
      </div>
      <div  style="color:#ffffff;" class="col-md-4" style="font-weight: bolder;">
        Already registered?<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="color:#ffffff;background-color: #888844;color: #ffffff;text-decoration: none;" href="login.php" class="btn primary"><h4 style="font-weight: bolder;font-size: 24px;"  >Login</h4></a>
  </div> 
    </div>
   </div>
   <!--<div class="row">
     <br><br>
     <div class="col-sm-2">
      <h1 style="color:white;font-size:200%;">Registration</h1>
      </div>
      <br><br>
      <div class="row">
      <div class="col-md-4">
      </div>
       <div class="col-md-4">
       <a href="colg.php" style="background-color: #3bafda;color: #ffffff;text-decoration: none;padding-left: 15px; padding-right: 18px;" class="btn primary"><h3 style="font-weight: bolder;font-size: 24px;">  For DJ Sanghvi Students   </h3></a><br><br>
       </div>
      </div>
    <div class="row">
    <div class="col-md-4">
      </div>
     <div class="col-md-4">
       <a href="other.php" style="background-color: #ff4d4d;color: #ffffff;text-decoration: none;" class="btn primary"><h4 style="font-weight: bolder;font-size: 24px;">For Inter College Students</h4></a><br><br>
     </div>
    </div>
   <br><br>
      <div class="row">
      <div class="col-md-4">
      </div>
      <div  style="color:#ffffff;" class="col-md-4" style="font-weight: bolder;">
        Already registered?<br><br>
        <a style="color:#ffffff;background-color: #888844;color: #ffffff;text-decoration: none;" href="login.php" class="btn primary"><h4 style="font-weight: bolder;font-size: 24px;"  >Login</h4></a>
  </div> 
    </div>
    </div>-->
  
   <div class="container" align="right">
  <a href="#" class="top"><span class="glyphicon glyphicon-chevron-up"></span></a>
   </div>
  <footer align="center" style="position:relative;margin:0 auto;left:0;right:0;bottom:0;text-align:center;color:white;padding-top:100px;"><br><br><br><br>
 &copy; Infotech Team-Trinity
  </footer>
<script src="../css/home/3d-rotating-navigation/js/jquery-2.1.1.js"></script>
<script src="../css/home/3d-rotating-navigation/js/main.js"></script> <!-- Resource jQuery -->
<script src="../css/home/back to top/js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>