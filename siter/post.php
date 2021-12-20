<?php

$email = $_POST['mail'];
$tele = $_POST['tel'];
$fio = $_POST['FIO'];

$username = 'ars';
$password = '13012014';
$dbname = 'site';
$servername = 'localhost';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `data` (`id`, `e-mail`, `telephone`, `fio`) VALUES (NULL, '$email', '$tele', '$fio');";

if ($conn->query($sql) === TRUE) {
  echo "Запрос отправлен";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>