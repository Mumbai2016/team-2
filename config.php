<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'u414877475_cache');
define('DB_USER','u414877475_cache');
define('DB_PASSWORD','jaikumari@9821');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
?>