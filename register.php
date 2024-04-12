<?php

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$db_servername = "localhost";
$db_username = "root"; // 
$db_password = ""; 
$db_dbname = "aurora";
$db_port = "3307";

$conn = new mysqli($db_servername, $db_username, $db_password, $db_dbname, $db_port);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
  $stmt = $conn->prepare("INSERT INTO users(name,password,email,contact)
   VALUES(?, ?, ?, ?)");
   $stmt->bind_param("sssi", $name, $password, $email, $contact);
  $stmt->execute();
  echo "registration successful";
  $stmt->close();
  $conn->close();
}

?>