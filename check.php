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

$sql = "SELECT name, cnumber, password FROM buyers WHERE cnumber='$_POST[cnumber]'AND password='$_POST[pass]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<a href=display.php>Click to continue</a>";
    break;
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
