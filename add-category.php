<?php
require_once 'config/database.php';
error_reporting(0);
######################################################
   $status = $_POST['status'];
   $b = implode(",",$status);
if(isset($_POST['add_cat']))
{
  extract($_POST);
  if($cname == '')
  {
    $msg = "Please enter category value";
  }
  elseif($status == '')
  {
    $msg = "Please enter status";
  }
  else
  {
    $query = "INSERT INTO `users1`(`id`, `cname`, `status`) VALUES (NULL,'$cname','$b')";
    $data = mysqli_query($dbcon,$query);
  }
}
#######################################################
//delete query
if(@$_GET['action']=='delete')
  {
      $fpost_id=$_GET['category'];
      $query ="DELETE FROM `users1` WHERE `id`='$fpost_id'";
      $data=mysqli_query($dbcon,$query);
  }

#########################################
/*if(@$_GET['action'] == 'Edit')
{
    $category = $_GET['category'];
    $query = "SELECT * FROM `category` WHERE `id` = '$id'";
    $data = mysqli_query($dbcon,$query);
    $res = mysqli_fetch_assoc($data);
}*/
#########################################

########################################################
// fetch query
$query = "SELECT `id`, `cname`, `status` FROM `users1`";
$data = mysqli_query($dbcon,$query);
########################################################

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Brilliance GPS Tracking</title>
<!-- slider start -->
<!-- slider end -->
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
  
<div id="wrap">
  <form method="POST">
  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <h1>Add Category</h1>
    <br>
    <div class="form-raw">
      <div class="form-name"> Name</div>
      <div class="form-txtfld">
        <input type="text" name="cname">
      </div>
    </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>    
    <div class="form-raw">
      <div class="form-name">Active</div>
      <div class="form-txtfld">
        <input type="checkbox" name="status[]" value="active">
      </div>      
      <div class="clear"></div>
      <div class="form-name">Deactive</div>
      <div class="form-txtfld">
        <input type="checkbox" name="status[]" value="deactive">
      </div>      
      <div class="clear"></div>
    </div>
        <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <p><?php echo @$msg; ?></p>
      <div class="form-txtfld" style="width:290px;">
        <input type="submit" class="btn" value="Submit" name="add_cat">
      </div>
    </div>
  </form>
  </div>
  <div class="clear">&nbsp;</div>
</div>
<div id="wrap3">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    
    <tr>
      <th width="59" align="left" valign="middle">Sr.No.</th>
      <th width="752" align="left" valign="middle">Name</th>
      <th width="77" align="left" valign="middle">Status</th>
      <th width="54" align="left" valign="middle">Edit</th>
      <th width="71" align="left" valign="middle">Remove</th>
    </tr>
    <?php
    while($res = mysqli_fetch_assoc($data))
    {
      ?>
    <tr>
      <td align="left" valign="top"><?php echo $res['id']; ?></td>
      <td align="left" valign="top"><?php echo $res['cname']; ?></td>
      <td align="left" valign="top"><strong><?php echo $res['status']; ?></strong></td>
      <td align="left" valign="top"><a href="update-category.php?category=<?php echo $res['id']; ?>&action=edit">Edit</a></td>
      <td align="center" valign="top"><a href="add-category.php?category=<?php echo $res['id']; ?>&action=delete"><img src="images/icon-bin.jpg" alt="" width="25" height="25" border="0" align="absmiddle"/>delete</a></td>
    </tr>
    <?php
    }
    ?>
  </table>
  <div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>
<footer>
  <footer class="whitefoter">
    <div class="whitefooter-cont">
      <div style="float:left;">Copyright © sikarwar softwares. All Rights Reserved.</div>      
           <a href="" target="_blank" style="float:right;">
                <img src="" alt="" title=""></a>
      
      <div class="clear"></div>
    </div>
  </footer>
</footer>
</body>
</html>