<?php
$servername = "localhost";
$username = "myadmin1";
$password = "myadmin1";
$dbname = "mindoro";

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$age= $_POST['age'];
$email= $_POST['email'];
$detail= $_POST['detail'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (fname, lname, age, email, detail)
VALUES ('".$fname."','".$lname."','".$age."','".$email."','".$detail."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}