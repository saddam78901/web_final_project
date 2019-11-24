<?php
include("../controller/config.php");
/*include("../controller/session.php");*/

if(isset($_POST["submit"])){
	
    $cid=$_GET['cid'];

	$fname=$_post['fname'];
	$lname=$_post['lname'];
	$phone=$_post['phone'];
	$uname=$_post['uname'];
	$pass=$_post['pass'];


$sql="UPDATE `cuinfo`
SET `fname`='".$fname."', `lname`='".$lname."', `phone`='".$phone."', `uname`='".$uname."', `pass`='".$pass."'
WHERE `cid`='".$cid."'";


$resultview=mysqli_query($myconn,$sql);
}
$sql="SELECT * FROM cuinfo";
$resul=mysqli_query($myconn,$sql);
while($row=mysqli_fetch_array($resul))
{
	$cid=$row['cid'];
	$fname=$row['fname'];
	$lname=$row['lname'];
	$phone=$row['phone'];
	$uname=$row['uname'];
	$pass=$row['pass'];

}
echo'<form class="form-group" id="sform" onsubmit=" return formvali();" action="customer_view.php" method="POST">

Name: <input type="text" id="fname" name="fname" value="'.$fname.'"><br>
Name: <input type="text" id="lname" name="lname" value="'.$lname.'"><br>
Phone: <input type="number" id="phone" name="phone" value="'.$phone.'"><br>

user name : <input type="text" id="uname" name="uname" value="'.$uname.'" readonly><br>

Password: <input type="password" id="pass" name="pass" value="'.$pass.'"><br>

<input type="submit" value="Update"><br>
</form>';

?>