<?php
require_once 'config/database.php';

    $query = "SELECT * FROM `users` "; 
    $data = mysqli_query($dbcon,$query);
    $admin_res = mysqli_fetch_array($data);
    $oldpwd = $admin_res['password'];

if(isset($_POST['ch_pass']))
{
  $cpass=$_POST['cpass'];
  $npass=$_POST['npass'];
  $cnf_pass=$_POST['cnf_pass'];

  if($cpass == $oldpwd)
  {
    if($npass == $cnf_pass)
    {
      $update = "UPDATE `users` SET `password`='$npass' WHERE `id`=1";
      $query = mysqli_query($dbcon,$update);
      if($query)
      {
        $msg = "your password change successfully";
      }
      else{
        $msg = "your both password do not match";
      }
    }
  }
  else
  {
    $msg = "you enterd wrong password";
  }
}


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Admin - Indo Roots</title>
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
       <div class="logo"><img src="images/logo.png" border="0"></div>
    <div class="topmenu">
      <ul>
        <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li><a href="change-password.php">Change Password</a>&nbsp;|</li>
        <li><a href="index.php"><img src="images/logout.png" width="16" height="16" border="0" align="absmiddle">&nbsp;&nbsp;Logout</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</header>
  <nav>
    <ul id="qm0" class="qmmc" >
      <li><a href="admin.php">Dashboard</a></li>
      <li><a href="#">Product</a>
          <ul>
            <li><a href="add-category.php">Add Category</a></li>
            <li><a href="add-sub-category.php">Add  Sub Category</a></li>
            
            <li><a href="product.php">Add Product</a></li>
          </ul>
      </li>        
     <!--  <li><a href="#">CCTV</a>
          <ul>
          	<li><a href="product-brand.html">Add Brand</a></li>
          	<li><a href="cctv.html">Add Product</a></li>
          </ul>
      </li> -->
    </ul>
  </nav>
  
<div id="wrap" >
  <form method="POST">
  <section class="bodymain" style="min-height:580px;">
    <aside class="middle-container">
      <div class="admin-inr"><br>

		<div class="form-outer" style="margin-left:320px; width:500px;">
		          <h1>Change Password</h1>
		          <div class="contact-row">
		            <div class="name">Current Password</div>
		            <div class="txtfld-box">
		              <input type="text" name="cpass" required>
		            </div>
		            <div class="req-field"> This Field Required </div>
		          </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">New Password</div>
		            <div class="txtfld-box">
		              <input type="text" name="npass" required>
		            </div>
		          </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">Confirm Password</div>
		            <div class="txtfld-box">
		              <input type="password" name="cnf_pass" required>
		            </div>
		          </div>
		          <div class="clear">&nbsp;</div>
		          <div class="contact-row">
		            <div class="name" style="float:right; width:1px;">&nbsp;</div>
		            <div style="background:none; border:none; float:left;">
		              <input type="submit" class="btn" value="Change Password" name="ch_pass">
		              <br><br>
                  <p><?php echo @$msg; ?></p>

		            </div>
		          </div>
            </form>
              </div>
              </div>
		        </div>
		        <div class="clear">&nbsp;</div>
		        
        <div class="clear"></div>
      </div>
    </aside>
    <div class="clear"></div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </section>
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