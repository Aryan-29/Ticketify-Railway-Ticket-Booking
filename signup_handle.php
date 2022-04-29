<?php
// Script to connect to the database
$show = "false";
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";

$conn = mysqli_connect($servername, $username, $password, $database);


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user_name = $_POST['signupName'];
  $user_email = $_POST['signupEmail'];
  $pass = $_POST['signupPassword'];


//Check whether this email exists
$existSql = "select * from `users` where email = '$user_email'";
$result = mysqli_query($conn, $existSql);
$numRows = mysqli_num_rows($result);
if($numRows > 0){
  $show="Email already exist";
} else {
  $sql = "INSERT INTO `users` ( `name`, `email`, `password`, `date`) VALUES ('$user_name', '$user_email', '$pass', current_timestamp())";
  $result = mysqli_query($conn, $sql);
  if($result){
    header('Location: /Ticketify/Ticketify/signup.php?signupsuccess=true');
    exit;
  }
}
header("Location: /Ticketify/Ticketify/signup.php?signupsuccess=false&error=$show");
}
?>