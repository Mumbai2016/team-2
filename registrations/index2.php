<?php
session_start();

if(isset($_SESSION['Username']))
{
	header('Location: logged.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Registration Form</title>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
<!-- start header_bottom -->
<style type="text/css">
  a:link{color:white;}
  a:visited{color:white;}
  a:hover{color:#428BCA;}
</style>



<link rel="stylesheet" type="text/css" href="header/header.css">
<script src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>
    <div class="header-bottom">
     
     <div class="col-md-6">
      <div class="header-bottom_left">
      <?php if(!isset($_SESSION['Username'])) 
      {
        
      ?>
        <span style="font-size:100%;" class="flk"><a href="../../reg/login.php">Login</a> |<a href="reg/"> Register</a></span>
        <?php } 
        else{
          $na=$_SESSION['Username'];
          echo'<span>Welcome ';
          echo $na;
          echo '</span> &nbsp;&nbsp;<a href="http://www.djtrinity.in/reg/logout.php">Logout</a>   ';
        }
        ?>
      </div>
     </div>
     
       <div class="clear"></div>
     <meta name="viewport" content="width=device-width, initial-scale=1">
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
<body >
<header class="cd-header">
    <a href="#0" class="cd-logo"><img src="logo.png" alt="Logo"></a>
    <a href="#0" class="cd-3d-nav-trigger">
      Menu
      <span></span>
    </a>
  </header>
   <nav class="cd-3d-nav-container fixed">
    <ul class="cd-3d-nav">
      <li>
        <a href="home.php"class="../3d-rotating-navigation/css/style.css">Home</a>
      </li>

      <li class="cd-selected">
        <a href="about.php">About Us</a>
      </li>

      <li>
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
  </nav> 
  
  <!-- end header_bottom -->
  <!-- start menu -->
    
  <!-- end menu -->
  <script src="../css/home/3d-rotating-navigation/js/jquery-2.1.1.js"></script>
<script src="../css/home/3d-rotating-navigation/js/main.js"></script> <!-- Resource jQuery -->
<script src="../css/home/back to top/js/index.js"></script>


	<!-- //grid-slider -->
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->




    </head>
    <body>
    

     
      <div class="about_banner_img"><img src="../images/blog_img1.jpg" class="img-responsive" alt=""/></div>
      <div class="about_banner_wrap">
       <h1 class="m_11">Registration</h1>
     </div>
     <div class="border"> </div>
   </center>
   <div class="container">
    <center>


     <br><br>
     <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
       <a href="colg.php" class="btn btn-danger"><h4>For DJ Sanghvi Students</h4></a><br><br>

     </div>

     <div class="col-md-4">
       <a href="other.php" class="btn btn-warning"><h4>For Inter College Students</h4></a><br><br>
     </div>

   </div>
   <br><br>
     
  			Already registered?<br><br>
  			<a href="login.php" class="btn btn-success"><h4>Login</h4></a>
  
  	</div>


</center>
<br>    <br>    <br>    



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
