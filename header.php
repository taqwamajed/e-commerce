<?php
 session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fashion & Beauty | Zero  </title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="normalize.css">
<!--link Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!--link JS-->
<script src="script.js"></script>
<!--link font awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> 
</head>

  <body>
  <!--start nav-->
  <nav class="navbar nav-underline navbar-expand-md sticky-top bg-white">
    <div class="container-xl">
      <a class="navbar-brand ms-2" href="#"><img src="images/logo.png" width="120px" alt="brand"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 mt-3">
          <li class="nav-item">
            <a class="nav-link"  href="index.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="index.php#sale">Sale </a>
          </li>
         </ul>
        </div>
        <ul class="list-uesr-cart d-flex flex-row me-3">
          <?php
        if(isset($_SESSION['name'])){?>
        <li class="me-3 mt-3">
        <div class="btn-group">
          <a href="" type="button" class="btn btn-primary text-white">
            <?php if(isset($_SESSION['name'])){?>
          <?php echo $_SESSION['name'];}?></a>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-dark" href="logout.php">Logout</a></li>
          </ul>
        </div>
          </li>
        <?php
      }else{?>
        <li class="me-3 mt-3">
        <a href="signin.php">
        <i class="fa-regular fa-user"></i></a></li>
        <?php
        }
      ?>
        <li class="me-3 mt-3">
        <a href="#"><i class="fa-regular fa-heart"></i></a></li>
        <li class="me-3 mt-3">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
      </ul>
    </div>
    </nav>
</body>
</html>