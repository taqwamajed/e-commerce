<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
  
  include "db-connect.php";

  $firstName=test_input($_POST["fName"]);
  $lastName=test_input($_POST["lName"]);
  $email=test_input($_POST["email"]);
  $pass=test_input($_POST["password"]);
  $ConfirmPassword=test_input($_POST["conPassword"]);
}else{
  header("Location:register.php?error=error");
  exit;
}


function test_input($data){
  $data=htmlspecialchars($data);
  $data=trim($data);
  $data=stripcslashes($data);
  return($data);
}

$flag="0";

if(empty($firstName)){
  $flag="Missing First Name";
  header("Location: register.php?error=$flag");
  exit;
  }else if(empty($lastName)){
    $flag="Missing Last Name";
    header("Location: register.php?error=$flag");
    exit;
  }else if(empty($email)){
  $flag="Missing Email";
  header("Location: register.php?error=$flag");
  exit;
  }else if(empty($pass)){
    $flag="Missing Password";
    header("Location: register.php?error=$flag");
  exit;
  }else if(empty($ConfirmPassword)){
      $flag="Missing Confirm Password";
      header("Location: register.php?error=$flag");
      exit;
  }else if($pass !== $ConfirmPassword){
        $flag="Password and Confirm Password don't match ";
        header("Location: register.php?error=$flag");
        exit;
      
  }else{
    //hasheing the password
    $_POST['password'] = password_hash($_POST['password'] ,PASSWORD_DEFAULT);
    $_POST['conPassword']= password_hash($_POST['conPassword'],PASSWORD_DEFAULT);

    //insert data
    $sql="INSERT INTO users (fname, lname, email ,password ,confirmpassword) VALUES (?, ?, ? ,? , ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $_POST['fName'], $_POST['lName'],$_POST['email'], $_POST['password'], $_POST['conPassword']);
    $stmt->execute();
    
    header("Location: register.php?success= Your account has been created Successfully");
    exit;
  }
  ?>