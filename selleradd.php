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

$sql = "INSERT INTO products (sname, cnumber, password, pcategory, pprice, pfile)
VALUES ('$_POST[name]', '$_POST[cnumber]', '$_POST[pass]', '$_POST[pcat]', '$_POST[pprice]', '$_POST[imageUpload]')";

if (mysqli_query($conn, $sql)) {
  echo "<a href = 'index.html'>Click here to continue.</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
