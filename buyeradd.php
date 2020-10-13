<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO buyers (name, address, cnumber, password)
VALUES ('$_POST[name]', '$_POST[raddress]', '$_POST[cnumber]', '$_POST[pass]')";

if (mysqli_query($conn, $sql)) {
  echo "<a href = 'login.html'>Click here to continue.</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
