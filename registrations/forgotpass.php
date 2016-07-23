<?php
session_start();
ob_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>atma</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="../css/styles.css" rel="stylesheet">
  </head>
  <body>




















  <?php



  include ('database_connection.php');
  require_once('class.phpmailer.php');
  require_once('class.smtp.php');
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


       if (empty($error))//if the array is empty , it means no error found
       { 



        $query_check_credentials = "SELECT * FROM reg_users WHERE (Email='$Email') AND Activation IS NULL";
 $dbc = mysqli_connect("localhost","djtrinit_uks","trinity2k15","djtrinit_2015");

    
        

        $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials){//If the QUery Failed 
          echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.




            $res = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable
            $id=$res['Memberid'];

            $ranstr = substr(str_shuffle(MD5(microtime())), 0, 8);


            $query_insert = "INSERT INTO `pwdrec` ( `id`, `string`) VALUES ( '$id', '$ranstr')";


            $result_insert = mysqli_query($dbc, $query_insert);

            $message = " To reset your account, please click on this link: ";
            $message .= "http://www.atma.com/registrations/pwdreset.php and enter the temporary password given along with the new password."  ;
            $message.="\n\nThe Temporary password is :";
            $message.=$ranstr;
            
          //  mail($Email, 'DJ Trinity Password Reset', $message, 'From: infotech.djtrinity@gmail.com');

             $mail = new PHPMailer(); // create a new object
              $mail->IsSMTP(); // enable SMTP
           //   $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only default=0 no error and no msgs.
              $mail->SMTPAuth = true; // authentication enabled
              $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
              $mail->Host = "smtp.gmail.com";
              $mail->Port = 465; // or 587 or 465
              $mail->IsHTML(true);
              $mail->Username = "infotech.atma@gmail.com";
              $mail->Password = "anilkumar@9892";
              $mail->SetFrom("infotech.atma@gmail.com");
              $mail->Subject = "Your Account Reset Instructions";
              $mail->Body = $message;
              $mail->AddAddress($Email);
              $mail->Send();





              header("Location: pwdsubmit.php");


          }else
          { 

            $msg_error= 'Either Your Account is not present or is inactive or Email address is Incorrect';
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
        <span style="font-size:100%;" class="flk"><a style="color:#ffffff;" href="../../reg/login.php">Login</a> |<a style="color:#ffffff;" href="reg/"> Register</a></span>
        <?php } 
        else{
          $na=$_SESSION['Username'];
          echo'<span>Welcome ';
          echo $na;
          echo '</span> &nbsp;&nbsp;<a href="http://localhost/atma/registrations/logout.php">Logout</a>   ';
        }
        ?>
















<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
          
            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
              
                <ul class="nav">
                <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
              </ul>
               
                  <ul class="list-unstyled hidden-xs" id="sidebar-header">
                    <li>
                      <h3>atma</h3>
                    </li>
                </ul>














           
              
</br></br></br></br></br>




                <!-- tiny only nav-->
              <ul class="nav visible-xs" id="xs-menu">
                    <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                    <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              
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


                 </div>
                              </div>

                           
                             
                           
                             
                           

                              
                           
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-7">
                               
                                <div class="well"> 
                                   




<p><center><b><h2>Reset Password</h2></b></center><p>


<form action="forgotpass.php" method="post" class="form-horizontal">
        <fieldset>

          <br>

          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-lg-7">
              <div class="input-group">
                <input type="text" class="form-control" id="e-mail" name="e-mail" size="235" placeholder="Enter Email to reset">
                <span class="input-group-addon"></span></div>
              </div>
            </div>

            <center>
              <br>
             
              <input type="hidden" name="formsubmitted" value="TRUE" />
              <button style="background-color: #ff4d4d;color: #ffffff;text-decoration: none;" type="submit" class="btn primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspSubmit</button></center>
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
                            <p>
                            <a href="#" class="pull-right">©Copyright 2016</a>
                            </p>
                          </div>
                        </div>
                      
                      <hr>
                      
                      <h4 class="text-center">
                      <a href="http://www.atma.com" target="ext">atma</a>
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