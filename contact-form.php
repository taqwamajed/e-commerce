<?php
  if($_SERVER["REQUEST_METHOD"] =="POST"){
  
    include "db-connect.php";
  
    $name=test_input($_POST["name"]);
    $email=test_input($_POST["email"]);
    $message=test_input($_POST["message"]);
  }else{
    header("Location:contact.php?error=error");
    exit;
  }
  
  
  function test_input($data){
    $data=htmlspecialchars($data);
    $data=trim($data);
    $data=stripcslashes($data);
    return($data);
  }
  
  $flag="0";
  
  if(empty($name)){
    $flag="Missing Name";
    header("Location: contact.php?error=$flag");
    exit;
    }else if(empty($email)){
    $flag="Missing Email";
    header("Location: contact.php?error=$flag");
    exit;
    }else if(empty($message)){
    $flag="Missing Message";
    header("Location: contact.php?error=$flag");
    exit;
        
    }else{
      
      //insert data
      $sql="INSERT INTO contact (fullname, email ,message) VALUES (?, ?, ? )";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sss", $name, $email, $message);
      $stmt->execute();
      header("Location: contact.php?success=You will be contacted");
      exit;
     
    }
?>