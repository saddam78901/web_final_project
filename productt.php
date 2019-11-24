<?php
include("../controller/config.php");
$table_productinfo="CREATE TABLE IF NOT EXISTS productinfo(
pid INT(11) NOT NULL auto_increment,
PRIMARY KEY(pid),
pname VARCHAR(50) NOT NULL,
pprice VARCHAR(50) NOT NULL,
pdesc VARCHAR(13) NOT NULL,
img_name VARCHAR(50) NOT NULL,
img_path  VARCHAR(18) NOT NULL,
img_type VARCHAR(13) NOT NULL

)";
$productinfo=mysqli_query($myconn,$table_productinfo);

if($productinfo===TRUE)
{
	echo "Cuinfo tabel created";
}
else
{
		echo "Cuinfo tabel not created";

}

?>