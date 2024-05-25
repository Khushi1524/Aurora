<?php 
include('connect.php');

    if($_POST['id']){
        $id=$_POST['id'];
    
        $sqlQuery = "DELETE FROM blogs WHERE id='$id'";
        if(mysqli_query($conn,$sqlQuery)){
            header('Location: ../adminpanel.php');
        }
       }


?>