<?php


// Script to connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";

$conn = mysqli_connect($servername, $username, $password, $database); 

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $from = $_POST['From'];
  $to = $_POST['To'];
  $date = $_POST['date'];
  $adult = $_POST['adult'];
  $child = $_POST['child'];
  $infant = $_POST['infant'];
  $seat = $_POST['seat'];

  echo $from;
  echo $to;
  echo $adult;
  echo $child;
  echo $infant;
  echo $date;

  $existSql = "INSERT INTO `passenger` (`Source`,`Destination`, `Date`,`Preferred_seat`,`Adult`,`Children`,`Infant`) VALUES ('$from','$to','$date','$seat','$adult','$child','$infant')";
  $result = mysqli_query($conn, $existSql);

  if($result){
    $location = "Location: /Ticketify/Ticketify/ticket_print.php?&from=$from&to=$to&date=$date&seat=$seat&adult=$adult&child=$child&infant=$infant";
    header($location);
  }
}
?>