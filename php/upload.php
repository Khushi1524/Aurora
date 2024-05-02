<?php
include ('connect.php');
if (isset($_POST['submit'])) {
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'images/' . $file_name;


    $query = mysqli_query($conn, "Insert into images (file) values ('$file_name')");

    if (move_uploaded_file($tempname, $folder)) {
        echo "<h2>File uploaded successfully</h2>";
    } else {
        echo "<h2>File not uploaded successfully</h2>";
    }

    header('Location: ../countries.php');
    exit;
}
?>