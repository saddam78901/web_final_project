<?php


$pid=$_GET['pid'];
include("../controller/config.php");

$sql="DELETE FROM productinfo WHERE pid ='" . $pid . "'";
$query=mysqli_query($myconn,$sql);

header("location:product_view.php");



?>



