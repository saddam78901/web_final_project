<?php
include("../controller/config.php");
$table_cuinfo="CREATE TABLE IF NOT EXISTS cuinfo(
cid INT(11) NOT NULL auto_increment,
PRIMARY KEY(cid),
fname VARCHAR(50) NOT NULL,
lname VARCHAR(50) NOT NULL,
phone VARCHAR(13) NOT NULL,
uname VARCHAR(50) NOT NULL,
pass  VARCHAR(18) NOT NULL,
gender ENUM('m','f','o') NOT NULL

)";
$cuinfo=mysqli_query($myconn,$table_cuinfo);

if($cuinfo===TRUE)
{
	echo "Cuinfo tabel created";
}
else
{
		echo "Cuinfo tabel not created";

}

?>