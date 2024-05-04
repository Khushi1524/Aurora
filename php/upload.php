<?php
session_start();

include ('connect.php');
if (isset($_POST['submit'])) {
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '../images/' . $file_name;
    $userid=$_SESSION['userid'];


    $query = mysqli_query($conn, "Insert into images (userid,file) values ('$userid','$file_name')");

    if (move_uploaded_file($tempname, $folder)) {
        echo "<h2>File uploaded successfully</h2>";
        header('Location: ../countries.php');
    } else {
        echo "<h2>File not uploaded successfully</h2>";
    }
    exit;
}
?>