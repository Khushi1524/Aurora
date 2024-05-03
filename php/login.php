
<?php
session_start();

include("connect.php");
if(isset($_POST['name']) && isset($_POST['password'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE name= '$name' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if( $count == 1){
        $row=$result->fetch_assoc();
        $_SESSION['userlogin']=true;
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['userid']=$row['id'];
        header("Location: ../index.php");
        exit(); // Ensure no further code execution after redirection
    } else {
        header('Location: ../authentications/login.html');
    }
}
?>
