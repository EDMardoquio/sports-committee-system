<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection, "msc_sup" );
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['users_id'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection, "select * from users where user_log='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['user_log'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
