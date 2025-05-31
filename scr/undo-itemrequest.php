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

$sql = "UPDATE `Item_request` SET `status` = 'Pending' WHERE `Item_request`.`trans_id` = $id;";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('location:item_request.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>