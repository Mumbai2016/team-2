<?php
session_start();
ob_start();
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



    include ('database_connection.php');

    if (isset($_POST['formsubmitted'])) {
    // Initialize a session:
      session_start();
    $error = array();//this array will store all error messages
    


    if (empty($_POST['e-mail'])) {//if the email supplied is empty 
      $error[] = 'You forgot to enter the temporary password ';
    } else {



      $new=$_POST['pass'];
      $new=md5($new);
      $temp = $_POST['e-mail'];
    } 

 $dbc = mysqli_connect("localhost","u414877475_cache","jaikumari@9821","u414877475_cache");

    
       if (empty($error))//if the array is empty , it means no error found
       { 



        $query_check_credentials = "SELECT * FROM pwdrec WHERE (string='$temp')";

        

        $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials){//If the QUery Failed 
          echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.




            $res = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to a Variable

            $id=$res['id'];




            $query_modify2 = "INSERT INTO `pwdrec` ( `id`, `string`) VALUES ( '$id', '$ranstr')";
            $query_modify = "UPDATE `reg_users` SET `Password`='$new' WHERE `Memberid`='$id' ";



            $result_modify = mysqli_query($dbc, $query_modify);



            header("Location: pwdthanks.php");


          }else
          { 

            $msg_error= 'Either Your Account does not match or temporary password is incorrect';
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
                      <h3>Cachebuffer</h3>
                    </li>
                </ul>














                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Tech News</a></li>
                    <li><a href="#stories"><i class="glyphicon glyphicon-list"></i> Algorithms</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-paperclip"></i> Most Viewed</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-refresh"></i> About Us</a></li>
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
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="http://www.cachebuffer.com"><i class="glyphicon glyphicon-home"></i> Home</a>
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
                                   






<form action="pwdreset.php" method="post" class="form-horizontal">
    <fieldset>

      <br>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Temp Pass:</label>
        <div class="col-lg-8">
          <div class="input-group">
            <input type="password" class="form-control" id="e-mail" name="e-mail" size="235" placeholder="Enter temporary password">
            <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span></div>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">New Pass:</label>
          <div class="col-lg-8">
            <div class="input-group">
              <input type="password" class="form-control" id="pass" name="pass" size="235" placeholder="Enter the new password">
              <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span></div>
            </div>
          </div>
          <center>
            <br>
            <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span>&nbspCancel</button>&nbsp&nbsp&nbsp
            <input type="hidden" name="formsubmitted" value="TRUE" />
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspSubmit</button></center>
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