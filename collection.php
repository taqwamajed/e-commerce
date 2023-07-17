<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fashion & Beauty | Zero  </title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--link CSS-->
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
   <div class="card">
      <img src="images/bg-home.jpg" class="card-img img-fluid" alt="bg-home">
      <div class="card-img-overlay ms-2 d-flex flex-column justify-content-center">
      <div class="container-xl">
        <p class="card-title h6"><small>
          New Shop Collection</small></p>
        <h1 class="card-text text-2">Find Your Favorite
        <h1 class="text-2">Clothing Collection</h1>
        </h1>
        <p class="card-text">
        <small> To 40% Off Final Sale
        Items Cauhtg in <br>The Moment</small> </p>
        <div class="d-none d-sm-block ">
        <a class="btn btn-outline-primary " href="#categories" role="button">Show Collection</a></div>
      </div>
    </div>
  </div>

   <!--start prodect-->
   <div class="container-md">
    <div class="row">
    <h1  class="mt-5 col-sm  text-center">SHOP BY CATEGORIES</h1>
    <!--start nav-prodects-->
    <nav id="categories" aria-label="Page navigation example">
      <ul class="col-sm pagination  justify-content-center mt-5 mb-5">
      <li class="page-item"><a class="page-link text-dark" href="#">All</a></li>
        <li class="page-item"><a class="page-link text-dark" href="#">Accessories</a></li>
        <li class="page-item"><a class="page-link text-dark" href="#">Women</a></li>
        <li class="page-item"><a class="page-link text-dark" href="#">Kids</a></li>
      </ul>
</nav>
   </div>
    <!--start collection-->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        include ('db-connect.php');
        $sql="SELECT * FROM prodect";
        $result=$conn->query($sql);
        while($row = $result->fetch_assoc()){?>
       <form action="prodect.php" method="POST">
       <div class="col">
       <div class="card h-100">
        <a class="link-underline link-underline-opacity-0 text-dark" href="prodect.php?id=<?php echo $row["id"];?>">
        <img name="image" src="<?php echo $row["image"];?>" 
        class="card-img-top">
       <div class="card-body">
       <h5 name="Pname" class="card-title text-center"><?php echo $row["name"];?></h5></a>
       <p name="price" class="card-text text-center"><?php echo $row["price"];?></p>
       <input type="hidden" name="Pname" value="<?php echo $row["name"];?>">
       <input type="hidden" name="price" value="<?php echo $row["price"];?>">
       <div class="d-flex justify-content-center align-items-center">
       <input type="number" name="quantity" value="1" class="form-control w-50 text-center">
        </div>
       <div class="text-center">
       <a href="prodect.php ?id=<?php echo $row["id"];?>" name="add-cart" class="btn btn-primary mt-3 col-6 rounded-pill fs-5">Add to Cart</a>
        </div>
        </div>
        </div>
        </div>
        </a>
       </form>
       <?php
       }
       ?>
       </div>
       </div>
        <!--start sale-->
       <div class="container-md">
       <div class="row">
       <h1 id="sale" class="mt-5 col-sm  text-center">SALE</h1>
       <div class="row row-cols-1 row-cols-md-6 g-4">
        <?php
        include ('db-connect.php');
        $sql="SELECT * FROM prodect WHERE id > 20";
        $result=$conn->query($sql);
        while($row = $result->fetch_assoc()){?>
       <form action="prodect.php" method="POST">
       <div class="col">
       <div class="card h-100">
        <a class="link-underline link-underline-opacity-0 text-dark" href="prodect.php?id=<?php echo $row["id"];?>">
        <img name="image" src="<?php echo $row["image"];?>" 
        class="card-img-top">
       <div class="card-body">
       <h6 name="Pname" class="card-title text-center  mt-2"><?php echo $row["name"];?></h6>
       <p name="price" class="card-text text-center text-danger  mt-2"><?php echo $row["price"];?></p>
       <input type="hidden" name="Pname" value="<?php echo $row["name"];?>">
       <input type="hidden" name="price" value="<?php echo $row["price"];?>">
       <div class="d-flex justify-content-center align-items-center">
       <input type="number" name="quantity" value="1" class="form-control w-50 text-center mt-2">
        </div>
       <div class="text-center">
       <a href="prodect.php ?id=<?php echo $row["id"];?>" name="add-cart" class="btn btn-primary mt-3 rounded-pill ">Add to Cart</a>
        </div>
        </div>
        </div>
        </div>
        </a>
       </form>
       <?php
       }
       ?>
       </div>
      </div>
</div>
</div>
</body>
</html>