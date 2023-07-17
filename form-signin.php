<?php
		session_start();
		if(isset($_SESSION['name'])){
			header("Location: index.php");
			exit;
		}
		if($_SERVER["REQUEST_METHOD"] =="POST"){
		$email=test_input($_POST["email"]);
		$pass=test_input($_POST["password"]);
		include "db-connect.php";
		}else{
			header("Location:signin.php?error=error");
			exit;
		}
		function test_input($data){
			$data=htmlspecialchars($data);
			$data=trim($data);
			$data=stripcslashes($data);
			return($data);
		}

		$flag="0";

		 if(empty($email) || empty($pass) ){
			$flag="Email or Missing Password";
			header("Location: signin.php?error=$flag");
			exit;
			}else{
				$sql="SELECT * FROM users WHERE email = '$email'";
				$result = $conn->query($sql);
         if ($result->num_rows > 0) {
					
					$row = $result->fetch_assoc();
					$_SESSION['name'] = $row["fname"];
					if($email == $row["email"]){
					if(password_verify($pass ,$row["password"])){
						$flag =$row["fname"];
							header("Location: index.php?$flag");
							exit;
					 }else{
						$flag="Incorect Email or Password";
					  header("Location: signin.php?error=$flag");
					  exit;
					 }
					}
			
				}else{
					$flag="Incorect Email or Password";
					header("Location: signin.php?error=$flag");
					exit;
				 }
				}
			?>