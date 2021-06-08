<?php
define("dbhost","localhost");
define("dbuser","root");
define("dbpass","");
define("dbname","bgt");
$dbcon=mysqli_connect(dbhost,dbuser,dbpass,dbname);

########################################################
error_reporting(0);
if(isset($_POST['login']))
{
    extract($_POST);
    $query = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password'"; 
    $data = mysqli_query($dbcon,$query);
    $admin_res = mysqli_fetch_array($data);
    // validation on login form 
    if(empty($email) && empty($password))
    {
        $msg = "Please Enter Email & Password";
    }
    else if(empty($email))
    {
        $msg ="Please Enter Your Email";
    }
    else if(empty($password))
    {
        $msg ="Please Enter Your Password";
    }
    // checking id and password in database
    else
    {
        if($admin_res['email'] == $email && $admin_res['password'] == $password)
        {
            // Define the session 
            $_SESSION['sid']=$admin_res['email'];
            header('location: admin.php');
        }
        else
        {
            $msg = "Id & Password do not match";
        }
    }
    
}

#########################################################

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Brilliance GPS Tracking</title>
<link rel="stylesheet" href="css/style.css">
<!--[if lt IE 9]>
<script type="text/javascript" src="html5.js"></script>
<![endif]-->
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix1.js"></script>
<![endif]-->

<!-- Menu start --------------->
<link href="menu/quickmenu0.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="menu/quickmenu0.js"></script>
<!-- Menu End --------------->
</head>
<body>
<header>
  <div id="wrap">
    <div class="logo"><img src="" border="0"></div>
    
    <div class="admintxt">Admin panel</div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</header>
<div class="clear"></div>
<div class="bodycont">
    <form method="post">
  <div id="wrap2" style="min-height:530px;">
    <div class="login-cont">
      <h1 class="loginhd">Login Here</h1>
      <div class="login-row">
        <div class="loginname">Email</div>
        <div class="admintxtfld-box">
          <input type="text" name="email" Required>
        </div>        
        <div class="clear"></div>
      </div>
<!--       <div class="loginreq-field">* This Field Required </div> -->
      
      <div class="login-row">
        <div class="loginname">Password</div>
        <div class="admintxtfld-box">
          <input type="password" name="password" >
        </div>
        <div class="clear"></div>
      </div>
      
      <div class="clear"></div>
      <div class="contact-row" style="width:325px;">
        <div style="background:none; border:none; margin-top:15px;">
        <a href="admin.php" style="text-decoration:none;">
          <input type="submit" class="btn" value="Login" name="login">
          </a><br>
          <p><?php echo @$msg; ?></p>
</form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="clear"></div>
<footer>
  <footer class="whitefoter">
    <div class="whitefooter-cont">
      <div style="float:left;">Copyright © Brilliance GPS Tracking. All Rights Reserved.</div>      
           <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;">
                <img src="images/akslogo.png" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>
      
      <div class="clear"></div>
    </div>
  </footer>
</footer>
</body>
</html>