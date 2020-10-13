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

$sql = "INSERT INTO cart (pprice, pfile)
VALUES ('$_POST[price]', '$_POST[p]')";

if (mysqli_query($conn, $sql)) {
  echo "<a href = 'checkout.php'>Click here to get bill.</a> <br><br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "DELETE FROM products WHERE id='$_POST[d]'";

if (mysqli_query($conn, $sql)) {
  echo "<a href = 'display.php'>Click here to continue shopping.</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
