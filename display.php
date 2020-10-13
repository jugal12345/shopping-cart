<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT pcategory, pprice, pfile, id FROM products WHERE id>=1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
echo "<table>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
  //  echo "<tr><td>".$row["pfile"]."</td><br><td>".$row["pcategory"]." ".$row["pprice"]."</td></tr><br>";
$pfile = $row["pfile"];
$pcategory = $row["pcategory"];
$pprice = $row["pprice"];
$id = $row["id"];

echo "<html>
<head>

<title></title>
</head>
<body style='background-color:floralwhite;'>";

//echo "$pfile";

//echo"<img src = \"abcs.png\" height = 60px style = \"float:left; margin-top: 15px;\">";

Echo "<img src =\"$pfile\" width=250px />";

echo "<br />";
echo "<form action='confirm.php' method='post'>
<label>Price</label>
  <input type='text' id='price' name='price' value='$pprice' readonly><br><br>
  <label>Id</label>
  <input type='number' id='d' name='d' value='$id' readonly><br><br>
  <input type='hidden' id='p' name='p' value='$pfile' readonly>
  <input type='submit' value='ADD TO CART'>
</form>
<br />
<br />
<br />";



}
  echo "</table>";
} else {
  echo "0 results";
}

echo "</body></html>";

$conn->close();
?>
