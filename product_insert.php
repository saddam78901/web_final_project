
<?php
//save product on the folder
if(isset($_POST['btn_upload']))
{
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "../image/".$filename;

    move_uploaded_file($filetmp,$filepath);


//------------insert porduct info
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pdesc=$_POST['pdesc'];
include("../controller/config.php");
$sql="INSERT INTO productinfo(pid,pname,pprice,pdesc,img_name,img_path,img_type)
VALUES('$pid','$pname','$pprice','$pdesc','$filename','$filepath','$filetype')";
$result = mysqli_query($myconn,$sql );
header("location:../view/product_view.php");


}



?>
