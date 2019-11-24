<?php
include("../controller/config.php");
$table_signup="CREATE TABLE IF NOT EXISTS signup(
sid INT(11) NOT NULL auto_increment,
PRIMARY KEY(sid),
fname VARCHAR(50) NOT NULL,
lname VARCHAR(50) NOT NULL,
phone VARCHAR(13) NOT NULL,
uname VARCHAR(50) NOT NULL,
pass  VARCHAR(18) NOT NULL,
gender ENUM('m','f','o') NOT NULL

)";
$signup=mysqli_query($myconn,$table_signup);

if($signup===TRUE)
{
	echo "Cuinfo tabel created";
}
else
{
		echo "Cuinfo tabel not created";

}

?>