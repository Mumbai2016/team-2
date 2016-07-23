<?php

session_start();

include ('database_connection.php');

require_once('class.phpmailer.php');

require_once('class.smtp.php');





if (isset($_POST['formsubmitted'])) {

    $error = array();//Declare An Array to store any error message  

    if (empty($_POST['name'])) {//if no name has been supplied 

        $error[] = 'Please Enter a name ';//add to array "error"

      } else {

        $name = $_POST['name'];//else assign it a variable

      }





 



 if (empty($_POST['mob'])) {//if no mob has been supplied 

        $error[] = 'Please Enter Mobile Number ';//add to array "error"

      } else {

        if(strlen($_POST['mob'])!=10)

        {

          $error[]='Please Enter correct mobile number';

        }

        else



        $mob = $_POST['mob'];//else assign it a variable

    }







    if (empty($_POST['e-mail'])) {

      $error[] = 'Please Enter your E-mail ';

    } else {





      if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {

           //regular expression for email validation

        $email = $_POST['e-mail'];

      } else {

       $error[] = 'Your E-Mail Address is invalid  ';

     }





   }





   if (empty($_POST['password'])) {

    $error[] = 'Please Enter Your Password ';

  } else {

    $password = $_POST['password'];

    $password = md5($password);

  }





  





    if (empty($error)) //send to Database if there's no error '



    { // If everything's OK...

$check = "SELECT * FROM reg_users  WHERE Email ='$email'";
$run= mysqli_query($conn, $check);
if($run)
{
     
}


        // Make sure the email address is available:

    $query_verify_email = "SELECT * FROM reg_users  WHERE Email ='$email' AND Activation IS NULL ";

    $result_verify_email = mysqli_query($conn, $query_verify_email);

        if (!$result_verify_email) {//if the Query Failed ,similar to if($result_verify_email==false)

          echo ' Database Error Occured ';

        }











       if (mysqli_num_rows($result_verify_email) == 0) {// IF no previous user is using this email or sap .



      

            // Create a unique  activation code:

          $activation = md5(uniqid(rand(), true));









          $query_insert_user = "INSERT INTO `reg_users` ( `Username`, `Email`, `Password`,`Mob`,`Activation`) VALUES ( '$name', '$email', '$password','$mob','$activation')";





          $result_insert_user = mysqli_query($conn, $query_insert_user);

          if (!$result_insert_user) {

            echo 'Query Failed ';

          }



            if (mysqli_affected_rows($conn) == 1) { //If the Insert Query was successfull.





                // Send the email:

              $message = " To activate your account, please click on this link:\n\n";

              $message .= WEBSITE_URL . '/activate.php?email=' . urlencode($email) . "&key=$activation";

            







              $mail = new PHPMailer(); // create a new object

              $mail->IsSMTP(); // enable SMTP

           //   $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only default=0 no error and no msgs.

              $mail->SMTPAuth = true; // authentication enabled

              $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail

              $mail->Host = "smtp.gmail.com";

              $mail->Port = 465; // or 587 or 465

              $mail->IsHTML(true);

              $mail->Username = "infotech.cachebuffer@gmail.com";

              $mail->Password = "anilkumar@9892";

              $mail->SetFrom("infotech.cachebuffer@gmail.com");

              $mail->Subject = "Atma Account Activation Link";

              $mail->Body = $message;

              $mail->AddAddress($email);

              $mail->Send();

         /*     if(!$mail->Send())

              {

                echo "Mailer Error: " . $mail->ErrorInfo;

              }

               else

                {

                    echo "Message has been sent";

                }



         */























                // Flush the buffered output.





                // Finish the page:

                /*echo '<div class="alert alert-dismissable alert-success">

                <button type="button" class="close" data-dismiss="alert">×</button>Thank you for

                registering! A confirmation email

                has been sent to '.$email.' Also check your Spam folder for the mail. And Please click on the Activation Link to Activate your account </div>';*/
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank you for

                registering! A confirmation email

                has been sent to '.$email.' Also check your Spam folder for the mail. And Please click on the Activation Link to Activate your account .')
    window.location.href='logincolg.php';
    </SCRIPT>");
                 



            } else { // If it did not run OK.

              /*echo '<div class="alert alert-dismissable alert-danger">

              <button type="button" class="close" data-dismiss="alert">×</button>You could not be registered due to a system

              error. We apologize for any

              inconvenience.Mail Error</div>';*/
              echo '<script type="text/javascript">alert("System Error");</script>';

            }



        } else { // The email address is not available.

          /*echo '<div class="alert alert-dismissable alert-danger">

          <button type="button" class="close" data-dismiss="alert">×</button>That email

          address or SAP ID has already been registered.

        </div>';*/
        //echo '<script type="text/javascript">document.querySelector(\'.submit\').onclick = function(){swal("Email or SAP already registered");};</script>';
          echo '<script type="text/javascript">alert("Email already Exists");</script>';
      }



    } else {//If the "error" array contains error msg , display them







    /*echo '<div class="alert alert-dismissable alert-danger">

    <button type="button" class="close" data-dismiss="alert">×</button> <ol>';

    foreach ($error as $key => $values) {



      echo '  <li>'.$values.'</li>';
      






    }

    echo '</ol></div>';*/

echo '<script type="text/javascript">alert("Please check all the details");</script>';


  }

  

    mysqli_close($conn);//Close the DB Connection



} // End of the main Submit conditional.







?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Atma</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="../css/styles.css" rel="stylesheet">



    <script src='https://www.google.com/recaptcha/api.js'></script>



      
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
 <script type = "text/javascript" 
         src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script src="jquery.min.js" type="text/javascript"></script>
<SCRIPT type="text/javascript">
$(document).ready(function()
{
$("#name").change(function() 
{ 


 var name = $("#name").val();
   $("#status").load('ajax.php', {"name":name} );



});

});
</SCRIPT>




  </head>
  <body>






      <?php  if(!isset($_SESSION['Username']))       { ?>
      
        <?php 
  } else {
    $na=$_SESSION['Username'];
    echo'<span>Welcome ';
    echo $na;
    echo '</span> &nbsp;&nbsp;<a href="logout.php">Logout</a>   ';
  }

  ?>












<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
          
            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
              
                
               
                  <ul class="list-unstyled hidden-xs" id="sidebar-header">
                    <li>
                      <h3>Atma</h3>
                    </li>
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
                        <a href="../"><i class="glyphicon glyphicon-home"></i> Home</a>
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

<p>Signup</p>
                                
                                </div>
                              </div>

                           
                             
                           
                             
                           

                              
                           
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-7">
                               
                                <div class="well"> 
                                   
<center><p><b><h2>Sign up</h2></b></p></center>


 <form action="colgreg.php" method="post" name="colgreg" id="colgreg" class="form-horizontal">
          <fieldset>
            <br>
            <div class="form-group">
             <div class="col-md-2"></div>
              <div class="col-lg-8">
                <div class="input-group" width="100%">
                  <input style="border-radius:5px;" type="text" class="form-control" id="name" name="name" size="25" placeholder="Enter your Full name" required>
                     <span id="status"></span>
                 </div>
                </div>
              </div>
              <div class="form-group">
 <div class="col-md-2"></div>
                <div class="col-lg-8">
                  <div class="input-group" width="100%">
                    <input style="border-radius:5px;" type="email" class="form-control" id="e-mail" name="e-mail" size="25" placeholder="Email ID" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2"></div>
                  <div class="col-lg-8">
                      <div class="input-group" width="100%">
                      <input style="border-radius:5px;" type="number" class="form-control" id="mob" name="mob" size="25" placeholder="Mobile no." required>
                      </div>
                    </div>
                  </div>
                         
                    <div class="form-group">
                       <div class="col-md-2"></div>
                      <div class="col-lg-8">
                          <div class="input-group" width="100%">
                          <input style="border-radius:5px;" type="password" class="form-control" id="password" name="password" size="25" placeholder="Enter Password." required>
                           </div>
                        </div>
                      </div>
                     
    <br>


                                    </br></br>

<center>

    <br>

    
    <input type="hidden" name="formsubmitted" value="TRUE" />

    <button type="submit" class="btn btn-success submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspSubmit</button>

  </center>

  <br>

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
                         
                          </div>
                        </div>
                      
                      <hr>
                      
                 
                      <hr>
                        
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>




<!--post modal-->

  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>	



