<?php
session_start();
if(isset($_SESSION['username'])){
 header("Location: admin-page.php");
 exit;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="normalize.css">
  <!--link Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!--link font awesome-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> 
  <title>LogIn Admin</title>
</head>
<body>
   <div class="container-xl">
    <h1 class="text-center mt-5">LogIn Admin</h1>
   <div class="d-flex justify-content-center align-items-end mt-5 py-5">
   
   <form method="POST" action="form-login-admin.php">
   <?php if(isset($_GET['error'])){?>
      <p class="alert alert-danger text-center" role="alert">
        <?php echo $_GET['error'];}?>
    </p>
   <div class="row mb-3 ">
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
  <button type="submit" class="btn btn-primary mb-5">LOGIN</button>
   </form>
   </div>
  </div>
</body>
</html>