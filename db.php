<?php
$con = mysqli_connect('localhost','root','root','atma') or die(mysql_error());
$database = mysqli_select_db($con,'atma') or die(mysql_error());
?>
