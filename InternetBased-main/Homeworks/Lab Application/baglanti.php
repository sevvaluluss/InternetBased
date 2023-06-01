<?php
$servername = "localhost";
$username = "root"; // MySQL kullanıcı adınızı girin
$password = "12345"; // MySQL şifrenizi girin
$dbname = "veritaban"; // Veritabanı adınızı girin

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "UTF8");

?>
