<?php

$servername="localhost";
$username="root";
$password="";
$dbname="db-zero";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
  die("Connection falid".$conn_connect_error);
}
?>