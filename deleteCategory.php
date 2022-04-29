<?php

// Script to connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";

$conn = mysqli_connect($servername, $username, $password, $database); 

$id = $_GET['id'];

$q = " DELETE FROM `personal` WHERE srno = $id ";

$result = mysqli_query($conn, $q);

if($result){
  $showAlert = true;
  $message = 'Discussion Deleted Successfully';
  header("Location: /Ticketify/Ticketify/booking-form-personal_details.php");
  exit();
}

?>