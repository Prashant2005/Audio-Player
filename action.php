<?php
$servername = "sql103.epizy.com";
$username = "epiz_26929739";
$password = "CUosyyRW3NVpQmh";
$dbname = "epiz_26929739_io";
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$country=$_POST['country'];
$email=$_POST['email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO google(fname, lname, country, email)
VALUES ('$fname', '$lname', '$country', '$email')";

if ($conn->query($sql) === TRUE) {
  header('location:https://events.google.com/io/?utm_source=devsite-hpp&utm_medium=embedded_marketing&utm_campaign=svd-2021&lng=en');
} else {
  echo "Please Retry ";
}

$conn->close();
?>
