<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (email, username, password)
VALUES ('emo@example.com', 'emo', 'emoemo')";
$sql = "INSERT INTO users (email, username, password)
VALUES ('edisonsadiku@example.com', 'edisons', 'ediedi')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>