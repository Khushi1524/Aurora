<?php 
include('./connect.php');

    if($_POST['title'] && $_POST['image'] && $_POST['content']&& $_POST['id']){
        $title=$_POST['title'];
        $image=$_POST['image'];
        $content = $_POST['content'];
        $id = $_POST['id'];
    
        $sqlQuery = "UPDATE blogs SET title='$title',image='$image',content='$content' WHERE id='$id'";
        if(mysqli_query($conn,$sqlQuery)){
            header('Location: ../adminpanel.php');
        }
       } 



?>