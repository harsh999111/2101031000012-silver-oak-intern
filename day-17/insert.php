<?php
$username = "root";
$servername = "localhost";
$password = "";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $username = $_POST['username'];
// $password = $_POST['password'];

// $sql = "INSERT INTO users (username, password)
//         VALUES ('$username', '$password')";

// if (mysqli_query($conn, $sql)) {
//     echo "Record inserted successfully";
// } else {
//     echo "Error inserting record: " . mysqli_error($conn);
// }

$sql = "DELETE FROM users WHERE id=7 to id=8";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " .mysqli_error($conn) ;
}

mysqli_close($conn);
?>







// $sql = "UPDATE users SET username='ridham' WHERE id=1";
// if (mysqli_query($conn, $sql)) {
//     echo "Record updated successfully";
//   }