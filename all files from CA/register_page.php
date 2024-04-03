<?php
$servername = "localhost";
$username = "aleksey";
$password = "26325againA";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO user_management (username, userpassword, useremail) VALUES ('wwwwwwwww', 'wwww@wwwww.com', '1111111111')";
?>
