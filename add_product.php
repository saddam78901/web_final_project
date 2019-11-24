

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="script/valid.js" type="text/javascript"> </script>
</head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="background-color:gray ; height:50px;"></div>     
</div>
<div class="row">
    <div class="col-sm-12" style="background-color: lightblue ; height:50px;">
   <nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href=".php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_customer.php">Add Customer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="customer_view.php">Customer Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_product.php"> Add Product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="product_view.php">Product Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="View/signupf.php">Log out</a>
    </li>
    
  </ul>
</nav>
    </div>     
</div>
<div class="row" style="height:700px">
    <div class="col-sm-4" style="background-color: gray ;"></div>
    <div  class="col-sm-8" style="background-color: olive ; ">
    <h2 >Add product form</h2>
  <form id="product" name="product" method="post" action="../model/product_insert.php" enctype="multipart/form-data"  " >

  <div>Product ID:</div>
    <input id="picid"  name="pid" type="text" >
    <div>Product Name:</div>
    <input id="picname"  name="pname" type="text"  >

  <div>Product Price:</div>
  <input id="picprice"  name="pprice" type="text"  >

   

     <div>Product Description:</div>

     <textarea name="pdesc" id="pdesc" rows="3" cols="40"></textarea>
      <div>Product Image:</div>

      <input type="file" name="file_img" id="file_img" >


    <div><input type="submit" name="btn_upload" button id="addnewprouct" value="Add new product"   >Add new product</button> </div>
  </form>
   
    
 
  <br>
  <br>
 
    </div>      
</div>

<div class="row">
    <div class="col-sm-12" style="background-color: lightblue ; height:50px;"></div>     
</div>
</div>

</body>
</html>



