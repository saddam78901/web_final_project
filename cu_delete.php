<?php


$cid=$_GET['cid'];
include("../controller/config.php");

$sql="DELETE FROM cuinfo WHERE cid ='" . $cid . "'";
$query=mysqli_query($myconn,$sql);

header("location:customer_view.php");



?>



