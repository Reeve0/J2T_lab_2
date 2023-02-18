
<?php
$user= $_POST['user'];
$pass= $_POST['pass'];

$servername = "localhost";
$username = "myadmin1";
$password = "myadmin1";
$dbname = "mindoro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (user, pass)
VALUES ('".$user."','".$pass."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>