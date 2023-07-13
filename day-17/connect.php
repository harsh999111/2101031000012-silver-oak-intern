<?php

 $username = "root";
 $servername = "localhost";
 $password = "";
 $dbname = "mydb";
 $conn = mysqli_connect($servername,$username ,$password , $dbname);


 if(!$conn){
    die("connection failed".mysqli_connect_error());
    
 }
 $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password  VARCHAR(30) NOT NULL
   
    )";
    
    if (mysqli_query($conn,$sql)) {
      echo "Table  created successfully";
    } else {
      echo "Error creating table: " .mysqli_error($conn);
    }

    mysqli_close($conn);
//  {
//  echo "connected successfuly";
//  }
//   $sql= "create database myDB";

//   if(mysqli_query($conn,$sql))
//   {
//     echo "database created";
//   }
//   else
//   {
//    echo "error";
//   }
?>