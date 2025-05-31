<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "msc_sup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "UPDATE `sports` SET `status` = '' WHERE `sports`.`sports_code` = $id;";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('location:index.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>