<?php
session_start();
$con = mysql_connect("localhost", "djtrinit_uks", "trinity2k15");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("djtrinit_quiz", $con);



$result = mysql_query("SELECT SUM(score) FROM q3users where dept='IT'");
$val1 = mysql_result($result, 0);

$result = mysql_query("SELECT SUM(score) FROM q3users where dept='COMPS'");
$val2 = mysql_result($result, 0);

$result = mysql_query("SELECT SUM(score) FROM q3users where dept='ELEX'");
$val3 = mysql_result($result, 0);

$result = mysql_query("SELECT SUM(score) FROM q3users where dept='EXTC'");
$val4 = mysql_result($result, 0);

$result = mysql_query("SELECT SUM(score) FROM q3users where dept='MECH'");
$val5 = mysql_result($result, 0);

$result = mysql_query("SELECT SUM(score) FROM q3users where dept='BIOPROD'");
$val6 = mysql_result($result, 0);

$result = mysql_query("SELECT SUM(score) FROM q3users where dept='CHEM'");
$val7 = mysql_result($result, 0);

if($val1==NULL)
	$val1=0;

if($val2==NULL)
	$val2=0;

if($val3==NULL)
	$val3=0;

if($val4==NULL)
	$val4=0;

if($val5==NULL)
	$val5=0;

if($val6==NULL)
	$val6=0;

if($val7==NULL)
	$val7=0;

if($val8==NULL)
	$val8=0;




mysql_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Live Scoreboard</title>
	<script src='Chart.js'></script>

	<meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
<body>
<header class="cd-header">
    <a href="#0" class="cd-logo"><img src="../reg/img/logo.png" alt="Logo"></a>
    <a href="#0" class="cd-3d-nav-trigger">
      Menu
      <span></span>
    </a>
  </header>


	
<div class="main">
	<center>
		<br><br>
<center><h1 style="color:white;font-size:200%;">Quiz- Live Score Board</h1></center>
		
		<div class="embed-responsive-item">
		<canvas id="income" width="700" height="500" style="color: white;"></canvas>
		</div>
		<script>
			var barData = {
				labels : ["I.T.","Comps","Elex","EXTC","Mech","Bio-Prod","Chem"],
				datasets : [
				{
					fillColor : "#FF6600",
					strokeColor : "#000000",
					data : [<?php echo $val1 ?>,<?php echo $val2 ?>,<?php echo $val3 ?>,<?php echo $val4 ?>,<?php echo $val5 ?>,<?php echo $val6 ?>,<?php echo $val7 ?>]
				}

				]
			}
			var income = document.getElementById("income").getContext("2d");
			new Chart(income).Bar(barData);
		</script>

		<br><br>

		<a  style="background-color: #3bafda;color: #ffffff;text-decoration: none;" href="../quiz" class="btn primary">Go Back To Quiz Home</a>
		<br>
		<br>
	</center>
</div>
<nav class="cd-3d-nav-container fixed">
    <ul class="cd-3d-nav">
      <li>
        <a href="home.php"class="3d-rotating-navigation/css/style.css">Home</a>
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
  </nav> <!-- .cd-3d-nav-container --> <!-- .cd-3d-nav-container -->
  <!-- for back to top-->

   <div class="container" align="right">
  <a href="#" class="top"><span class="glyphicon glyphicon-chevron-up"></span></a>
   </div>

  <footer align="center" style="position:relative;margin:0 auto;left:0;right:0;bottom:20px;text-align:center;color:white;padding-top:100px;">
 &copy; Infotech Team-Trinity
  </footer>


<script src="../css/home/3d-rotating-navigation/js/jquery-2.1.1.js"></script>
<script src="../css/home/3d-rotating-navigation/js/main.js"></script> <!-- Resource jQuery -->
<script src="../css/home/back to top/js/index.js"></script>












<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/bootstrap.min.js"></script>
	

</body>
</html>