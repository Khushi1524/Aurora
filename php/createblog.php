<?php 

session_start();

include('connect.php');

if($_POST['title']&& $_POST['image'] && $_POST['content']){
    $title=$_POST['title'];
    $image=$_POST['image'];
    $content=$_POST['content'];
    $userid=$_SESSION['id'];

    $sqlQuery = "INSERT INTO blogs(userid,title,image,content)VALUES('$userid','$title','$image','$content')";
    if(mysqli_query($conn,$sqlQuery)){
        header('Location:../blog.php');
    }
}


?>