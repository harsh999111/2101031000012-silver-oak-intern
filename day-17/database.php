<?php 
$username ="root";
$servername="localhost";
$password="";
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("connection failed".mysqli_connect_error());
}
else {
    echo "connected successfull";
}
?>

<!-- // $sql = "CREATE DATABASE myDB1";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// } -->