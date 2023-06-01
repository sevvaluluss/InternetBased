<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "veritaban";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT id, fullname, email, gender FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Ad Soyad: " . $row["fullname"]. " - Email: " . $row["email"]. " - Cinsiyet: " . $row["gender"]. "<br>";
  }
} else {
  echo "0 sonuç";
}
$conn->close();
?>
