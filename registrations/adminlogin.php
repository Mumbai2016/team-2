<?php
ob_start();
session_start();
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Cachebuffer</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="../css/styles.css" rel="stylesheet">

    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>
  <body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>












        <?php

error_reporting(0);

    include ('database_connection.php');


$dbc = new mysqli('localhost', 'u414877475_cache', 'jaikumari@9821', 'u414877475_cache');



// Check connect


    if (isset($_POST['formsubmitted'])) {
    // Initialize a session:
      session_start();
    $error = array();//this array will store all error messages


    if (empty($_POST['e-mail'])) {//if the email supplied is empty 
      $error[] = 'You forgot to enter your E-mail ';
    } else {


      if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {

        $Email = $_POST['e-mail'];
      } else {
       $error[] = 'Your E-Mail Address is invalid!  ';
     }


   }


   if (empty($_POST['Password'])) {
    $error[] = 'Please Enter Your Password ';
  } else {
    $Password = $_POST['Password'];
    $Password = md5($Password);
  }


       if (empty($error))//if the array is empty , it means no error found
       { 




if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }


        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }



 $secretKey = "6Lcagh4TAAAAAFnctTPFr7Et70UWbyornGsVL13t";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        } 




        $query_check_credentials = "SELECT * FROM admin WHERE (Email='$Email' AND password='$Password') AND Activation IS NULL";

        

        $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials){//If the QUery Failed 
          echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.




            $_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable

            echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Admin')
    window.location.href='../Users/adminhome.php';
    </SCRIPT>");
                 


          }else
          { 

            $msg_error= 'Either Your Account is inactive or Email address /Password is Incorrect';
          }

        }  else {



          echo '<br><br><div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button> <ol>';
          foreach ($error as $key => $values) {

            echo '  <li>'.$values.'</li>';



          }
          echo '</ol></div>';

        }


        if(isset($msg_error)){

          echo '<br><br><div class="lert alert-dismissable alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button><br>'.$msg_error.' <br><br></div>';
        }
    /// var_dump($error);
        mysqli_close($dbc);

} // End of the main Submit conditional.



?>


   <?php if(!isset($_SESSION['Username'])) 
      {
        
      ?>
       
        <?php } 

        else{
          $na=$_SESSION['Username'];
          echo'<span>Welcome ';
          echo $na;
          echo '</span> &nbsp;&nbsp;<a href="logout.php">Logout</a>   ';
        }
        ?>




<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
          
            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
              
               
               
                  <ul class="list-unstyled hidden-xs" id="sidebar-header">
                    <li>
                      <h3>Cachebuffer</h3>
                    </li>
                </ul>














                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active"><a href="#featured">Tech News</a></li>
                    <li><a href="#">Algorithms</a></li>
                    <li><a href="#">Most Viewed</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
              
              
</br></br></br></br></br>
<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:250px;">
    <a href="https://www.facebook.com/cachebuffer/" class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
   <!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a>-->
</div>

<script async src="//static.addtoany.com/menu/page.js"></script>




                <!-- tiny only nav-->
            
              
            </div>
            <!-- /sidebar -->
          
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                
                <!-- top nav -->
                <div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                      </button>
                    <!--<a href="/" class="navbar-brand logo">Cb</a>-->
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">
                 
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="../index.php"><i class="glyphicon glyphicon-home"></i> Home</a>
                      </li>
                   
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                        </ul>
                      </li>
                    </ul>
                    </nav>
                </div>
                <!-- /top nav -->
              
              
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->                      
                        <div class="row">
                          
                         <!-- main col left --> 
                         <div class="col-sm-5">
                           
                              <div class="panel panel-default">
                                <div class="panel-thumbnail"></div>
                                <div class="panel-body">



<div class="fb-page" data-href="https://www.facebook.com/cachebuffer/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/cachebuffer/"><a href="https://www.facebook.com/cachebuffer/">CacheBuffer</a></blockquote></div></div>

                                
                                </div>
                              </div>

                           
                             
                           
                             
                           

                              
                           
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-7">
                               
                                <div class="well"> 
                                   



<center><p><b><h2>Admin Login</h2></b></p></center>

 <form action="adminlogin.php" method="post" class="form-horizontal">
      <fieldset>

        <br>

        <div class="form-group">
         <div class="col-sm-2"></div>
          <div class="col-lg-8">
            <div class="input-group" width="80%">
              <input type="text" class="form-control" id="e-mail" name="e-mail" size="25" placeholder="Enter Email">
              </div>
            </div>
          </div>
          <div class="form-group">
           <div class="col-sm-2"></div>
            <div class="col-lg-8">
             <div class="input-group" width="80%">
              <input type="password" class="form-control" id="Password" name="Password" size="25" placeholder="Enter Password">
              </div>


</br>
                                     <center> 
                                        <div class="g-recaptcha" 
                                              data-theme="light" 
                                               data-sitekey="6Lcagh4TAAAAALgGBcwrus_101e2S7ayzC1dSvpt" 
                                               style="transform:scale(0.77);transform-origin:0 0">
                                        </div> </center>

                                    </br>



            </div>
          </div>
          <center>
            <br>
            <button style="background-color: #3bafda;color: #ffffff;text-decoration: none;"  type="reset" class="btn primary"><span class="glyphicon glyphicon-refresh"></span>&nbspReset</button>&nbsp&nbsp&nbsp
            <input type="hidden" name="formsubmitted" value="TRUE" />
            <button  style="background-color: #ff4d4d;color: #ffffff;text-decoration: none;"  type="submit" class="btn primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspLogin</button></center>
            <br>
       
          </div>
        </div>
      </fieldset>
    </form>












                                </div>
                      
                               

                              
                            
                          </div>
                       </div><!--/row-->
                      
                       
                        <div class="row" id="footer">    
                          <div class="col-sm-6">
                            
                          </div>
                          <div class="col-sm-6">
                            <p>
                            <a href="#" class="pull-right">©Copyright 2016</a>
                            </p>
                          </div>
                        </div>
                      
                      <hr>
                      
                      <h4 class="text-center">
                      <a href="http://www.cachebuffer.com" target="ext">Cachebuffer</a>
                      </h4>
                        
                      <hr>
                        
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>




<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      Update Status
      </div>
      <div class="modal-body">
          <form class="form center-block">
            <div class="form-group">
              <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div>
          <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
      </div>  
      </div>
  </div>
  </div>
</div>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>