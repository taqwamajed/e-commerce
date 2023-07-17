<?php
//nav
include('header.php');
//connect data
include ('db-connect.php');
$ID =$_GET["id"];
$sql="SELECT * FROM prodect WHERE id = $ID";
$result=$conn->query($sql);
$data = $result -> fetch_array();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>prodect| Zero  </title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--link CSS-->
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="normalize.css">
<!--link Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<!--link font awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> 
</head>
</body>
<form method="POST" action="add-cart.php">
<div class="card mt-5 border border-0" >
  <div class="row g-0 ">
    <div class="col-lg-7">
      <img  src="<?php echo $data["image"];?>" class="w-50 mx-auto d-block rounded-start">
    </div>
    <div class="col-lg-3 mt-4">
      <div class="card-body">
        <p class="card-title fs-4 mb-4 text-center"><?php echo $data["name"];?></p>
        <h3 class="card-text text-center"><?php echo $data["price"];?></h3>
        <input type="hidden" name="name" value="<?php echo $data["name"];?>">
        <input type="hidden" name="price" value="<?php echo $data["price"];?>">
        <hr>
        </p>
        <p class="fs-4">Size :</p>
        <div class="form-check form-check-inline">
        <input class="btn-check" type="radio" id="S" name="size" value="S">
        <label class="btn btn-outline-primary" for="S">S</label></div>
        <div class="form-check form-check-inline">
        <input class="btn-check" type="radio" id="M" name="size" value="M">
        <label class="btn btn-outline-primary" for="M">M</label></div>
        <div class="form-check form-check-inline">
        <input class="btn-check" type="radio" id="L" name="size" value="L">
        <label class="btn btn-outline-primary" for="L">L</label></div>
        <div class="form-check form-check-inline">
        <input class="btn-check" type="radio" id="XL" name="size" value="XL">
        <label class="btn btn-outline-primary" for="XL">XL</label></div>

       <div class="row">
       <label class="col-3 fs-4 mt-4" for="inputQty">Qty :</label>
       <input type="number" name="quantity" value="1" class="col-2 w-50 py-1 text-center mt-4" id="inputQty"></div>
       <div class="row justify-content-center align-content-center">
       <button type="submit" name="add-cart" class="btn btn-primary ms-4 mt-5  fs-5 col rounded-pill" style="width:320px;">Add to Cart</button>
       </div>
      </div>
    </div>
  </div>
</div>
</form>
<?php
//footer
include('footer.php');?>