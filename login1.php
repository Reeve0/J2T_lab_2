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

$sql = "SELECT  user, pass FROM login WHERE user ='Jonas' && Password = 'Mindoro'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " User! <br>";
  }
} else {
  echo "Wrong Account";
}
$conn->close();
?>