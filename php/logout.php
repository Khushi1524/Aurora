<?php 
session_start();

unset( $_SESSION['userlogin']);
unset( $_SESSION['name']);
unset( $_SESSION['email']);
unset( $_SESSION['id']);
session_unset();
session_destroy();

header('Location:../index.php');

?>