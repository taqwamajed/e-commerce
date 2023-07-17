<?php
  include('header.php');

  include ('db-connect.php');

  $ID =$_GET['id'];
  $sql ="DELETE from cart WHERE id =$ID";
  $flag="0";
  if ($conn->query($sql) === TRUE){
    $flag="Prodect deleted successfully";
    header("Location: cart.php?success=$flag");
    exit;
   } else { 
    $flag="rror deleting record:.$conn->error";
    header("Location: cart.php?error=$flag");
    exit;
   }



?>