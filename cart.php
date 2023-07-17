<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cart | Zero  </title>
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
   <?php
   //nav
   include('header.php');
   if(isset($_SESSION['name'])){
   include ('db-connect.php');
   $sql="SELECT * FROM cart";
   $result=$conn->query($sql);
   if(isset($_GET['success'])){?>
   <div class="container-lg">
    <div class="alert alert-success text-center fs-5" role="alert">
   <?php echo $_GET['success'];}?>
   </div>  
   </div>
    <?php  
    while($row =$result -> fetch_array()){?>
   <div class="container-fluid mt-5">
   <form action="del-product.php" method="POST">
   <table class="table table-responsive table-hover table-bordered shadow mt-5">
  <thead>
    <tr class="text-center">
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Size</th>
      <th scope="col">Quantity</th>
      <th scope="col">Delete Product</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?php echo $row["name"]?></th>
      <td><?php echo $row["price"]?></td>
      <td><?php echo $row["size"]?></td>
      <td><?php echo $row["qty"]?></td>
      <td><a href ="del-product.php?id=<?php echo $row["id"];?>" class="btn btn-danger">Delete</a></td>
    </tr>
  </tbody>
</table>
</form>
   </div>
    <?php
      }
    }else{
      header("Location: signin.php");
      exit;
    }
    include('footer.php');
    ?>
</body>
</html>