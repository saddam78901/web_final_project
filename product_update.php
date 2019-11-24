<?php
include("../controller/config.php");
/*include("../controller/session.php");*/

if(isset($_POST["submit"])){
	
   

	$pid=$_GET['pid'];
	$pname=$_post['pname'];
	$pprice=$_post['pprice'];
	$pdesc=$_post['pdesc'];
	$img_name=$_post['img_name'];
	$img_path=$_post['img_path'];


$sql="UPDATE `productinfo`
SET `pname`='".$pname."', `pprice`='".$pprice."', `img_name`='".$img_name."', `img_path`='".$img_path."' WHERE `pid`='".$pid."'";


$resultview=mysqli_query($myconn,$sql);
}


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