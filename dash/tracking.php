






<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>User Profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    <?php
                        include '../registrations/database_connection.php';
                        session_start();

                        $username = $_SESSION['Username'];
                        $_SESSION['username'] = $username;
                        $Email = $_SESSION['Email'];
                        echo $username;
                    ?>
                </a>
            </div>

            <ul class="nav">
                    <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i> 
                        <p>Project Analysis</p>
                    </a>
                </li>
                <li>
                    <a href="atmadashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Track Progress</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-user"></i>
                        <p>Volunteer Life Cycle</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Feedback</p>
                    </a>
                </li>

                <li>
                    <a href="tracking.php">
                        <i class="pe-7s-note2"></i>
                        <p>Tracking</p>
                    </a>
                </li>





                
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                        </li>
                        <li>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                         
                        <li>
                            <a href="/team-2/index.php">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Volunteer Tracking</h4>
                            </div>
                            <div class="content">
                               


                                 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">LeaderBoard</h4>
                                <p class="category"></p>
                            </br>
                                <p><b>Volunteers are rated according to their support for our organization depending upon the various criterias.</b></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Rank</th>
                                        <th>User ID</th>
                                        <th>Name of Volunteer</th>
                                        <th>Points earned quaterly</th>
                                        <th>Points earned annualy</th>
                                        
                                    </thead>
                                
                        
        
                                        
<?php


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$db_name = 'atma';
$tbl_name = 'volunteers';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db_name);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$rank=1; 
$query1="SELECT user_id, firstname, lastname FROM `volunteer-workhours` volw, `volunteers` vol where volw.id = vol.id" ;
$result=mysqli_query($conn,$query1);

$now = time(); // or your date as well
$your_date = strtotime("2016-07-01");
$datediff = $now - $your_date;
         
if ($result->num_rows > 0) {
     // output data of each row
     while($rows = $result->fetch_assoc()) {
    
     $datediff = floor($datediff/(60*60*24));
     $datediff+=17;

    
echo "<tr>"."<td>" .$rank."</td><td>". $rows["user_id"]. "</td><td>" . $rows["firstname"]."</td><td>" .$datediff."</td><td>". $datediff*3 ."</td>"."</tr>";


$rank++;


     }
}
  



    ?>


 
                                        
                                        
                                        
                                        
        
   

                                    </table>
                                  

                            </div>
                        </div>
                    </div>






<div class="header">
                                <h4 class="title">Connecting to Volunteers</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    

                                   <form action="test.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                    <!--    <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Organisation working for</label>
                                                <input type="text" class="form-control" placeholder="Company" value="Abc School">
                                            </div>
                                        </div> -->
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name = "email"class="form-control" value="<?php echo $Email;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input type="text" name = "fname" class="form-control" value="<?php echo $username;?>" value="">
                                            </div>
                                        </div>
                                       <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label>L Name</label>
                                                <input type="text" name = "lname" class="form-control" placeholder="Last Name" value="">
                                            </div>
                                        </div> -->

                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <input type="text" name = "message" class="form-control" placeholder="Message" value="">
                                            </div>
                                        </div>

                                    </div>

                   

                                    <button type="submit" name = "submit"class="btn btn-info btn-fill pull-left">Send Message</button>
                                
                                    <div class="clearfix"></div>
                                </form>
                                  





                                </div>
















                            </div>
                        </div>
                    </div>
             

                </div>
            </div>
        </div>


   

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>





