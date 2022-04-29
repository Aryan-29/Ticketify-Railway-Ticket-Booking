<?php
$showError = "false";
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";

$conn = mysqli_connect($servername, $username, $password, $database);


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user_email = $_POST['user'];
  $user_pass = $_POST['pass'];

  // Check whether this email exists
  $existSql = "select * from `users` where email = '$user_email' AND password = '$user_pass';";
  $result = mysqli_query($conn, $existSql);
  $numRows = mysqli_num_rows($result);


  if($numRows == 0){
    $showError = "Incorrect Email or Password";   
    header("Location: /Ticketify/Ticketify/login.php?loginsuccess=false&error= $showError");
}
if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['srno'] = $row['srno'];
        $_SESSION['email'] = $row['email'];
        return header("Location: /Ticketify/Ticketify/bookingcancel.php"); 
}
// $showError = "Incorrect Email or Password";
// header("Location: /Ticketify/Ticketify/login.php?loginsuccess=false&error= $showError");
}
?>