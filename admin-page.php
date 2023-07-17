<?php
session_start();
if(isset($_SESSION['username'])){
}else{
 header("Location: login-admin.php");
 exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Page | Zero  </title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="normalize.css">
<!--link Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!--link JS-->
<script src="script.js"></script>
<!--link google-font-->


<!--link font awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> 
</head>

<body>
<div class="container-md">
       <div class="row">
       <h1 id="sale" class="mt-5 col-sm-10 text-center">ADMIN PAGE</h1>
       <div class="btn-group col-sm-1 mt-5">
        <button type="button" class="btn btn-secondary   dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <?php if(isset($_SESSION['username'])){?>
          <?php echo$_SESSION['username'];}?>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="logout-admin.php">LOGOUT</a></li>
        </ul>
      </div>

  </div>
  </div>
    <?php
    include('db-connect.php');
    $sql="SELECT * from cart ";
    $result=$conn->query($sql);
    
    while($row =$result -> fetch_array()){?>
   <div class="container-lg mt-5">
   <table class="table table-responsive table-hover table-bordered shadow mt-5">
  <thead>
    <tr class="text-center">
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Size</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?php echo $row["name"]?></th>
      <td><?php echo $row["price"]?></td>
      <td><?php echo $row["size"]?></td>
      <td><?php echo $row["qty"]?></td>
    </tr>
  </tbody>
</table>
   </div>
   <?php
    }
  
?>

<?php
    include('db-connect.php');
    $sql="SELECT * from contact";
    $result=$conn->query($sql);  
    while($row =$result -> fetch_array()){?>
   <div class="container-lg mt-5">
   <table class="table table-responsive table-hover table-bordered shadow mt-5">
  <thead>
    <tr class="text-center">
      <th scope="col">USER Name</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MESSAGE</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?php echo $row["fullname"]?></th>
      <td><?php echo $row["email"]?></td>
      <td><?php echo $row["message"]?></td>
    </tr>
  </tbody>
</table>
   </div>
   <?php
    }
  
?>
</body>
</html>