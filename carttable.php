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

// sql to create table
$sql = "CREATE TABLE cart (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sname VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
pcategory VARCHAR(30) NOT NULL,
pprice VARCHAR(30) NOT NULL,
pfile varchar(20) NOT NULL

)";

if (mysqli_query($conn, $sql)) {
  echo "Table cart created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
