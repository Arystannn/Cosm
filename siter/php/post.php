<?php

$email = $_POST('mail');
$tele = $_POST('tel');
$fio = $_POST('FIO');

$user = 'root';
$password = 'root';
$db = 'siter';
$host = 'localhost';
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO data (e-mail, telephone, fio)
VALUES ('$email', '$tele', '$fio')";

if ($conn->query($sql) === TRUE) {
  echo "Запрос отправлен";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>