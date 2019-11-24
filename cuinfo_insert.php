<?php
include("../controller/config.php");

if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$uname=$_POST['uname'];


$pass=$_POST['pass'];

$gender=$_POST['gender'];

$sql="INSERT INTO cuinfo(fname,lname,phone,uname,pass,gender)
          VALUES('$fname','$lname','$phone','$uname','$pass','$gender')";
$result=mysqli_query($myconn,$sql);


if($result===TRUE)
{
		header("location:../view/customer_view.php");
}
else
{
	echo "registration fail";
	}
}

?>
