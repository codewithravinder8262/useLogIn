<?php
require_once 'config/database.php';
error_reporting(0);
######################################################
/*
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
    $query = "INSERT INTO `category`(`id`, `cname`, `status`) VALUES (NULL,'$cname','$status')";
    $data = mysqli_query($dbcon,$query);
  }
} */
#######################################################
//UPDATE POST
if(isset($_POST['update_cat']))
{
    extract($_POST);
    $query="UPDATE `users1` SET `cname`='$cname' WHERE `id`='$id'";
    mysqli_query($dbcon,$query);
    header('location:update-category.php');
}


#########################################

   /* if(@$_GET['action'] == 'Edit')
    {
        $category = $_GET['category'];
        $query = "SELECT * FROM `category` WHERE `id` = '$id'";
        $data = mysqli_query($dbcon,$query);
        $res = mysqli_fetch_assoc($data);
    
        
    }
    */
########################################

//UPDATE POST
if(isset($_POST['edit']))
{
    extract($_POST);
    $query="UPDATE `users1` SET `cname`='$cname' WHERE `id`='$id'";
    mysqli_query($dbcon,$query);
    header('location:add-category.php');
}


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
        <li><a href="change-password.html">Change Password</a>&nbsp;|</li>
        <li><a href="index.html"><img src="images/logout.png" width="16" height="16" border="0" align="absmiddle">&nbsp;&nbsp;Logout</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</header>
  <nav>
    <ul id="qm0" class="qmmc" >
      <li><a href="admin.html">Dashboard</a></li>
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
  <div id="wrap">    
<form method="POST">
  <?php
  if(@$_GET['action']=='edit')
  {
      $fpost_id=$_GET['category'];
      $query1="SELECT * FROM `users1` WHERE `id`='$fpost_id'";
      $post_data=mysqli_query($dbcon,$query1);
      $res1=mysqli_fetch_array($post_data);
  
  ?>
  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <h1>Update Category</h1>
    <br>
    <div class="form-raw">   
      <div class="form-name">Category Name</div>
      <div class="form-txtfld">   
      <input type="hidden" name="id" value="<?php echo $res1['id']; ?>">
      <input type="text" name="cname" value="<?php echo $res1['cname'];?>">    
      </div>      
    </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>    
    <div class="form-raw">
      <div class="form-name">Active</div>
      <div class="form-txtfld">
        <input type="checkbox" name="status">
      </div>      
      <div class="clear"></div>
    </div>
        <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <p><?php echo @$msg; ?></p>
      <div class="form-txtfld" style="width:290px;">
        <input type="submit" class="btn" value="update" name="edit">
      </div>
    </div>
  </form>
  <?php } ?>
  </div>
  <div class="clear">&nbsp;</div>
</div>
  <footer>
</footer>
</body>
</html>