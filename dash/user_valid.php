<?php


$con = mysqli_connect('localhost','u414877475_cache','jaikumari@9821','u414877475_cache') or die(mysql_error());


$database = mysqli_select_db($con,'u414877475_cache') or die(mysql_error());

if(isset($_POST['name']))
{

	$username = $_POST['name'];
	$sql = "SELECT `Username` FROM `reg_users` WHERE `Username` = '$username'";


	$myquery = mysqli_query($con,$sql) or die(mysql_error());


	
	   $result = mysqli_num_rows($myquery);
	if($result > 0)
	{
		//$row = mysqli_fetch_array($myquery,MYSQLI_NUM);
		//echo $row;
		echo 'exist';
	}
	else
	{
		echo 'not exist';
	} 
}

?>

