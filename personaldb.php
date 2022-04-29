<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";

$conn = mysqli_connect($servername, $username, $password, $database);


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST['fullname'];
    $number = $_POST['number'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
  
            // $sql = "INSERT INTO `users` (`name`,`email`, `password`, `date`)   
            // VALUES ('$user_name',$user_email', '$pass', current_timestamp())";
            $sql = "INSERT INTO `personal` ( `name`, `number`, `age`, `gender`) VALUES ('$name', '$number', '$age', '$gender')";
            $result = mysqli_query($conn, $sql);
  }
  header('Location: booking-form-personal_details.php');
  exit;
?>