

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../script/valid.js" type="text/javascript"> </script>
</head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="background-color:gray ; height:50px;"></div>     
</div>
<div class="row">
    <div class="col-sm-12" style="background-color: lightblue ; height:50px;">
    
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
      <a class="nav-link" href="View/signupf.php">Log out</a>
    </li>
    
  </ul>
</nav>
    </div>     
</div>
<div class="row" style="height:700px">
    <div class="col-sm-12" style="background-color: green ;">

<?php
include("../controller/config.php");
$sql="SELECT * FROM cuinfo";
$resultview=mysqli_query($myconn,$sql);
echo'<table border="2px"><tr> 
<th>Cu id</th> <th>fname</th> <th>lname</th><th>Phone</th> <th>username</th><th>password</th><th> Update</th> <th> Delete</th></tr>';
while($row=mysqli_fetch_array($resultview))
{
	$cid=$row['cid'];
	$fname=$row['fname'];
	$lname=$row['lname'];
	$phone=$row['phone'];
	$uname=$row['uname'];
	$pass=$row['pass'];
	echo '<tr><td>'.$cid.'</td><td>'.$fname.'</td><td>'.$lname.'</td><td>'.$phone.'</td><td>'.$uname.'</td><td>
	'.$pass.'</td><td><a href="cu_update.php?cid='.$cid.'">Update</a></td><td><a href="cu_delete.php?cid='.$cid.'">Delete</a></td></tr>';
}


?>
</div>
  </div>      
</div>
</div>
<div class="row">
    <div class="col-sm-12" style="background-color:lightblue ; height:50px;"></div>     
</div>
</div>

</body>
</html>
