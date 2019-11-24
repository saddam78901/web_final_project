

<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="script/valid.js" type="text/javascript"> </script>
</head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="background-color: gray ; height:50px;">

	
	</div>     
</div>
<div class="row">
    <div class="col-sm-12" style="background-color:lightblue;height:50px;">
    <nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href=".php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_customer.php">Add Customer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="customer_view.php">Customer Details</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="add_product.php">Add Product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="product_view.php">Product Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../controllrt/logout.php">Log out</a>
    </li>
    
  </ul>
</nav>
    </div>     
</div>
<div class="row" style="height:400px">
   
    <div  class="col-sm-12" style="background-color: olive ; ">
<?php
include("../controller/config.php");
$sql="SELECT * FROM productinfo";
$result=mysqli_query($myconn,$sql);

echo'<table border="2px"><tr> 
<th>pid</th> <th>pname</th> <th>pprice</th><th>pdesc</th><th>Image Name</th> <th>Image</th> <th> Update</th> <th> Delete</th></tr>';
while($row=mysqli_fetch_array($result))
{

	$pid=$row['pid'];
	$pname=$row['pname'];
	$pprice=$row['pprice'];
	$pdesc=$row['pdesc'];
	$img_name=$row['img_name'];
	$img_path=$row['img_path'];

	echo '<tr><td>'.$pid.'</td><td>'.$pname.'</td><td>'.$pprice.'</td><td>'.$pdesc.'</td><td>'.$img_name.'</td><td>
	<img src="../image/'.$img_name.'"style=height:100px; width:100px;></td><td><a href="product_update.php?pid='.$pid.'">Update</a></td><td><a href="product_delete.php?pid='.$pid.'">Delete</a></td></tr>';
	 
	
}

?>
    </div>     
</div>
</div>
<div class="row">
    <div class="col-sm-12" style="background-color:lightblue ; height:50px;"></div>     
</div>
</div>
</body>
</html>
