

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
  <script src=".../script/valid.js" type="text/javascript"> </script>
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
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../index.php">Signup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="loginf.php">Login</a>
    </li>
   
    
  </ul>
</nav>
    </div>     
</div>
<div class="row" style="height:700px">
    <div class="col-sm-4" style="background-color: gray ;"></div>
    <div  class="col-sm-8" style="background-color: olive ; ">
    <h2 >Registration form</h2>
 <form class="form-group" id="sform" onsubmit=" return formvali();" action="../controller/usercheck.php" method="POST">
  

    
  User Name:
  <div class="form-group">
      <input type="text" class="form-control" id="uname" placeholder="Enter uname" name="uname">
    </div>
  Password:
    <div class="form-group">
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
    </div> 

 
    <button type="submit" class="btn btn-primary">Log in</button>

  </form>      
</div>

<div class="row">
    <div class="col-sm-12" style="background-color: lightblue ; height:50px;"></div>     
</div>
</div>

</body>
</html>



