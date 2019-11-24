<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$myconn=mysqli_connect("$db_host","$db_user","$db_password");
$sql="CREATE DATABASE ecommarce";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	echo"Database created";
}
else
{
		echo"Database not created";

}


?>