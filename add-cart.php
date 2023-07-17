<?php
session_start();
if(isset($_SESSION['name'])){
  if($_SERVER["REQUEST_METHOD"] =="POST"){

  include "db-connect.php";
  $name= $_POST["name"];
  $price= $_POST["price"];
  $size= $_POST["size"];
  $qty= $_POST["quantity"];

  $sql="INSERT INTO cart (name, price ,size ,qty) VALUES ('$name' ,'$price' ,'$size' , $qty )";
  if ($conn->query($sql) === TRUE) {
    header("Location: cart.php");
   exit;
    } else { 
      echo $sql. "<br>". $conn->error;
     }
}
}else{
  header("Location: signin.php");
   exit;
}
?>