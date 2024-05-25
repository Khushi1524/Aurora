<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        text-decoration: none;
    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        background: transparent;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
    }

    .header .logo {
        font-size: 32px;
        color: #fff;
        text-decoration: none;
        font-weight: 700;
    }

    .header .navbar a {
        position: relative;
        font-size: 18px;
        color: #fff;
        font-weight: 500;
        text-decoration: none;
        margin-left: 40px;
    }

    .header .navbar button {
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 20px;
        color: #fff;
        font-weight: 700px;
        border: 2px solid rgb(151, 26, 151);
        background: transparent;
    }

    .header .navbar button:hover {
        background: rgb(91, 217, 108);
        background: linear-gradient(90deg, rgba(91, 217, 108, 1) 32%, rgba(115, 207, 226, 1) 100%);
        box-shadow: 0 2px 24px 0 rgb(203, 75, 207), 0 6px 16px 0 rgb(213, 75, 223);

    }


    .header .navbar a::before {
        content: '';
        position: absolute;
        top: 100%;
        left: 0;
        width: 0;
        height: 2px;
        background: #fff;
        transition: .5s;
    }

    .header .navbar a:hover::before {
        width: 100%;
    }

    ::-webkit-scrollbar {
        display: none;
    }

</style>

<body>

    <header class="header">
        <a href="#" class="logo">Aurora</a>

        <nav class="navbar">
            <a href="./#home">Home</a>
            <a href="./#galleryy">Gallery</a>
            <a href="./#destinationn">Destination</a>
            <a href="./#blog">Blog</a>
            <a href="./adminpanel.php">Admin</a>

            <?php
            if (isset($_SESSION['userlogin']) && $_SESSION == true) {
                echo '
          <a href="./php/logout.php"><button>' . $_SESSION['name'] . ' Logout</button></a>
        ';
            } else {
                echo '<a href="./authentications/registration.html"><button>Signup</button></a>';
            }

            ?>
        </nav>
    </header>

</body>

</html>