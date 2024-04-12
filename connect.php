<?php

$db_servername = "localhost";
$db_username = "root"; // 
$db_password = "";
$db_dbname = "aurora";
$db_port = "3307";

$conn = new mysqli($db_servername, $db_username, $db_password, $db_dbname, $db_port);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "registration successful";

?>