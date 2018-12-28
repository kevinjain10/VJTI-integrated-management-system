<?php
$servername = "localhost";
$username = "root";
$password = NULL;
  $mysql_database='vjti_database';
// Create connection
$conn = mysqli_connect($servername, $username, $password,$mysql_database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo 'Connected successfully<br>';
?>