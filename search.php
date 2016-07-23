<?php
include('config.php');

if($_POST)
{

$conn = mysqli_connect('localhost','u414877475_cache','jaikumari@9821','u414877475_cache') or die(mysqli_error());
$database = mysqli_select_db($conn,'u414877475_cache') or die(mysqli_error());


$q=$_POST['search'];
$sql_res=mysqli_query($conn,"select id,title,content from home_content where title like '%$q%' or content like '%$q%' order by id LIMIT 5");


if ($sql_res->num_rows > 0) {
     // output data of each row
     while($row = $sql_res->fetch_assoc()) {
        




$id=$row['id'];
$username=$row['title'];
$content=$row['content'];
$email = substr($content, 0, 50); 
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $email);
?>
<a href="Users/cacheblog.php?id=<?php echo $id;?>"><div class="show" align="left">
<img src="author.PNG" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
</div></a>
<?php

     }
} else {
     echo "0 results";
}



}
?>
