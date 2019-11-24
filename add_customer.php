

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
  <script src="../script/valid.js" type="text/javascript"> </script>
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
      <a class="nav-link" href="add_product.php">Add Product</a>
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
    <h2 >Customer Registration form</h2>
  <form method="POST" id="sform" onsubmit="return formvali()"action="../model/cuinfo_insert.php"  >
    <div class="form-group">
  First Name:
      <input type="fname" class="form-control" id="fname" placeholder="First Name" name="fname">
    </div>
    <div class="form-group">
  Last Name
      <input type="lname" class="form-control" id="lname" placeholder="Last Name" name="lname">
  </div>
  Phone:
<div class="form-group">
      <input type="phone" class="form-control" id="phone" placeholder="Phone Number" name="phone">
    </div>

    
  User Name:
  <div class="form-group">
      <input type="text" class="form-control" id="uname" placeholder="Enter email" name="uname">
    </div>
  Password:
    <div class="form-group">
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
    </div> 

    Gender:
<div class="form-check">
      <label class="form-check-label" for="gender">
        <input type="radio" class="form-check-input" id="gender" name="gender" value="option1" checked>Male
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="gender">
        <input type="radio" class="form-check-input" id="gender" name="gender" value="option2">Female
      </label>
    </div>
   <div class="form-check">
      <label class="form-check-label" for="gender">
        <input type="radio" class="form-check-input" id="gender" name="gender" value="option2">Others
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Add</button>

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



