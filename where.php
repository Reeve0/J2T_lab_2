<?php
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

$sql = "SELECT  Fname, Lname FROM users WHERE Lname='mindoro'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Name: " . $row["Fname"]. " " . $row["Lname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>