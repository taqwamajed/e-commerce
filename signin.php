<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign In | Zero  </title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="normalize.css">
<!--link Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!--link font awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> 
</head>

  <body>
    <!--nav-->
   <?php
   include('header.php');
   ?>
   <!--SIGN IN-->
   <div class="m-3  ">
   <div class="container-xl">
   <div class="row ">
   <ul class="navbar-nav nav-underline mt-3 mb-5 d-flex flex-row justify-content-center">
          <li class="nav-item">
            <a class="nav-link fs-3"  href="signin.php">SIGN IN </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3 ms-5" href="register.php">REGISTER </a>
          </li>
   </ul>
   <div class="mb-3 text-center">
   <p class="h1 fs-2">Welcome Backe!
   </p>
   <p>Login to Continue.</p>
</div>
</div>
<div class="d-flex justify-content-center align-items-content">
   <form method="post" action="form-signin.php">
   <?php if(isset($_GET['error'])){?>
      <p class="alert alert-danger" role="alert">
     <?php echo $_GET['error'];} ?>
   </p>
  <div class="row mb-3">
    <label for="inputEmail" class="col-sm-12 text-start col-form-label">Email</label>
    <div class="col-sm-12">
      <input type="email" name="email" class="w-100 form-control py-2" id="inputEmail">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword" class="col-sm-12 text-start col-form-label">Password</label>
    <div class="col-sm-12">
    <input type="password" name="password" class="w-100 form-control py-2" id="inputPassword">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mb-5">SIGN IN</button>
   </form>
   </div>
  </div>
</div>
   <!--footer-->
   <?php
   include('footer.php');
   ?>
  </body>
  </html>