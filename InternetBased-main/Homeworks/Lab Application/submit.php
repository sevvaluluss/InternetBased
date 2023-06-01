<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "veritaban";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Bağlantı hatası: " . $conn->connect_error);
}
?>

<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$sql = "INSERT INTO students (fullname, email, gender) VALUES ('$fullname', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "Kayıt başarıyla oluşturuldu.";
} else {
  echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
