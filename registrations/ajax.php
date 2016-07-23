<?php

$conn = mysqli_connect('localhost','root','root','atma') or die(mysql_error());
$database = mysqli_select_db($conn,'atma') or die(mysql_error());


if(isset($_POST['name']))
{
$name = $_POST['name'];
$sql = mysqli_query($conn,"select Memberid from reg_users where Username='$name'");
if(mysqli_num_rows($sql))
{
echo '<p style="color:red;">Someone already has that username. Try another?</p>';
}
else
{
echo 'Username <STRONG>'.$name.'</STRONG> is available.';
}
}

?>