
<?php
include("connect.php");
if(isset($_POST['name']) && isset($_POST['password'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE name= '$name' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        header("Location: index.html");
        exit(); // Ensure no further code execution after redirection
    } else {
        echo '<script>window.location.href = "index.php";</script>';
        echo '<script>alert("Login failed");</script>';
    }
}
?>
