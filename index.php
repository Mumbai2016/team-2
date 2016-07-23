<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Atma</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<style>
		.image:hover {
border-radius:50%;
box-shadow: 0 10px 6px -6px grey;
}
.image {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
}
</style>

    
    

<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
  $.ajax({
  type: "POST",
  url: "search.php",
  data: dataString,
  cache: false,
  success: function(html)
  {
  $("#result").html(html).show();
  }
  });
}return false;    
});

jQuery("#result").live("click",function(e){ 
  var $clicked = $(e.target);
  var $name = $clicked.find('.name').html();
  var decoded = $("<div/>").html($name).text();
  $('#searchid').val(decoded);
});


jQuery(document).live("click", function(e) { 
  var $clicked = $(e.target);
  if (! $clicked.hasClass("search")){
  jQuery("#result").fadeOut('slow'); 
  }
});


$('#searchid').click(function(){
  jQuery("#result").fadeIn();
});
});



$(document).click(function(){
  $("#result").hide();
});

/* Clicks within the dropdown won't make
   it past the dropdown itself */
$("#result").click(function(e){
  e.stopPropagation();
});


</script>
<style type="text/css">
  body{ 
    font-family:Tahoma, Geneva, sans-serif;
    font-size:18px;
  }
  .content{
    width:900px;
    margin:0 auto;
    padding-top: 3px;
  }
  #searchid
  {
    width:500px;
    border:solid 1px #000;
    padding:10px;
    font-size:14px;
    border-radius: 2pc;
  }
  #result
  {
    position:absolute;
    width:500px;
    padding:10px;
    display:none;
    margin-top:-1px;
    border-top:0px;
    overflow:hidden;
    border:1px #CCC solid;
    background-color: white;
  }
  .show
  {
    padding:10px; 
    border-bottom:1px #999 dashed;
    font-size:15px; 
    height:50px;
    color: #000;
  }
  .show:hover
  {
    background:#4c66a4;
    color:#FFF;
    cursor:pointer;
  }
</style>






	</head>
	<body>














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














                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active"><a href="registrations/adminlogin.php">Admin</a></li>
                    <li><a href="registrations/ngologin.php">NGO login</a></li>
                    <li><a href="#">.....</a></li>
                    <li><a href="#">.....</a></li>
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
                    


<div class="content">
<b>Atma</b>
<!--<input type="text" class="search" id="searchid" placeholder="Search for Blogs" />&nbsp; &nbsp; <br />  -->
<div id="result">


</div>
</div>
                    
                  	</nav>
                </div>
                <!-- /top nav -->
              
              
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->                      
                        <div class="row">
                          
                         <!-- main col left --> 
                         <div class="col-sm-4">
						 
                              <img src="image/logo.png" style="float:left">
                         </div>
						 &nbsp;
						 &nbsp;
						 &nbsp;
						 &nbsp;
						 <div class="col-sm-5">
						 <div class="well"> 
                                   <form class="form">
                                    <h4>Connect with Atma!!</h4>
                                    <div class="input-group text-center">
                                  
                                    <a href="registrations/logincolg.php"><button class="btn btn-lg btn-primary" type="button">Login</button>&nbsp&nbsp
                                       <a href="registrations/colgreg.php"><button class="btn btn-lg btn-primary" type="button">Signup</button></a>
                                    </div>
                                  </form>
                                </div>
</div>
                              </div>

                           
                             
                           
                             
                           

                              
                           
                          </div>
                          
                          
                          <!-- main col right -->
                          <div class="col-sm-7">
                               
                          


































                      
                             
                              
                            
                          </div>
                       </div><!--/row-->
                      
                       
                     
                      
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