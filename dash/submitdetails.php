<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$postal = $_POST['postalcode'];
$workex = $_POST['workex'];
$city = $_POST['city'];
$country = $_POST['country'];

if($fname !=''&& $email !=''&& $number !=''&& $address !='' && $lname !=''&& $postal !=''&& $workex !=''&& $city !='' && $country != '')
{
//  To redirect form on a particular page

error_reporting(0);
include ('database_connection.php');
$dbc = new mysqli('localhost', 'root', '', 'atma');

$query_insert_user = "INSERT INTO `volunteers` ( `username`, `email`, `firstname`,`lastname`,`address`,`city`,`country`,`postalcode`,`workexp`,`mobileno`) VALUES ( 'malabika', '$email', '$fname','$lname','$address','$city','$country','$postalcode','$workex','$mobileno')";





          $result_insert_user = mysqli_query($dbc, $query_insert_user);

          if (!$result_insert_user) {

            echo 'Query Failed ';

          }



            


header("Location:../dash/user.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>