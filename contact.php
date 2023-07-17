<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us | Zero  </title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="normalize.css">
<!--link Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!--link font awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

  <body>
    <!--nav-->
   <?php
   include('header.php');
   ?>
   <!--contant us-->
   <div class="m-2">
   <div class="container-xl">
   <div class="row justify-content-center">
   <p class="text-center mt-5 mb-5 fs-2 fs-sm-6 border-bottom w-25">Contact Us</p>
   </div>
   <div class="d-flex justify-content-center align-items-center">
   <form  method="POST" action="contact-form.php">
   <?php if(isset($_GET['success'])){?>
   <p class="alert alert-success" role="alert">
    <?php echo $_GET['success'];}?>
   </p>
    <?php if(isset($_GET['error'])){?>
   <p class="alert alert-danger" role="alert">
    <?php echo $_GET['error'];}?>
    </p>
    <div class="row mb-3">
    <label for="inputlastName" class="col-sm-12 text-start col-form-label">Full Name</label>
    <div class="col-sm-12">
      <input type="text" name="name" class="form-control w-100 py-2" id="inputlastName">
    </div>
  </div>
  <div class="row  mb-3">
    <label for="inputEmail" class="col-sm-12 text-start col-form-label">Email</label>
    <div class="col-sm-12">
      <input type="email" name="email" class="form-control w-100 py-2" id="inputEmail">
    </div>
  </div>
  <div class="row  mb-3">
  <label for="formInput" class="col-sm-12 text-start col-form-label">Message </label>
  <div class="col-sm-12">
   <textarea  name="message" class="form-control w-100 py-2" id="formInput" rows="3"
     style="height: 100px"></textarea>
    </div>
    </div>
     <button type="submit" class="btn btn-primary mb-5">SEND</button>
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