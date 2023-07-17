<?php
 session_start();
 
if(isset($_SESSION['username'])){
 header("Location: admin-page.php");
 exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  include("db-connect.php");
  $email=test_input($_POST["email"]);
  $password=test_input($_POST["password"]);
}else{
  header("Location: login-admin.php");
  exit;
}
function test_input($data){
  $data=htmlspecialchars($data);
  $data=stripslashes($data);
  $data=trim($data);
  return $data;
}
$flag="0";
if(empty($email) || empty($password)){
$flag="Email or Password are Missing";
header("Location: login-admin.php?error=$flag");
exit;
}else{
  $sql="SELECT * from admin WHERE email='$email' AND password='$password'";
  $result = $conn->query($sql);
         if ($result->num_rows > 0) {
          $_SESSION['username'] = $email;
					$row = $result->fetch_assoc();
					if($email == $row["email"]){
            if($password == $row["password"]){
              header("Location: admin-page.php");
              exit;
            }
          }else{
            $flag="Incorect Email or Password";
            header("Location: login-admin.php?error=$flag");
            exit;
            }

        }else{
          $flag="Incorect Email or Password";
          header("Location: login-admin.php?error=$flag");
          exit;
         }
}
?>