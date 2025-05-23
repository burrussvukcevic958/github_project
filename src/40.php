<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM table_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["column1"] . "</td><td>" . $row["column2"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
