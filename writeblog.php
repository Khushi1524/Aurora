<?php
session_start();

if (!isset($_SESSION['userlogin']) && !$_SESSION == true) {
    header('Location:./authentications/login.html');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy-2JZ3DIUsOsrvQeaCsqGlDfc5BOa3HpWXw&usqp=CAU');
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .container form {
            width: 50vw;
            height: 80vh;
            background: rgb(91, 217, 108);
            background: linear-gradient(90deg, rgba(91, 217, 108, 1) 32%, rgba(115, 207, 226, 1) 100%);
            box-shadow: 0 2px 24px 0 rgb(203, 75, 207), 0 6px 16px 0 rgb(213, 75, 223);
            border-radius: 20px;

        }

        .container form .fields {
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;

        }

        .container form .fields label,
        input {
            font-size: 20px;
            width: 500px;
            height: 45px;
        }

        .container form .field {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .container form button {
            padding: 16px 10px;
            width: 150px;
            font-size: 15px;
            color: #fff;
            background: black;
            border-radius: 8px;
        }

        .container form button:hover {
            color: black;
            font-size: 16px;
            font-weight: bold;
            background: rgb(91, 217, 108);
            background: linear-gradient(90deg, rgba(91, 217, 108, 1) 32%, rgba(115, 207, 226, 1) 100%);
            box-shadow: 0 2px 24px 0 rgb(203, 75, 207), 0 6px 16px 0 rgb(213, 75, 223);
        }
    </style>
</head>

<body>

    <?php
    include ('./php/nav.php');
    ?>

    <div class="container">
        <form action="./php/createblog.php" method="post">
            <div class="fields">
                <label for="">Title</label>
                <input type="text" name="title" id=""><br>
            </div>
            <div class="fields">
                <label for="">Image</label>
                <input type="text" name="image" id=""><br>
            </div>
            <div class="fields">
                <label for="">Text Content</label>
                <textarea type="" id="" name="content" rows="10" cols="70"></textarea><br>
            </div>
            <div class="field">
                <button type="reset">Reset</button><br>
                <button type="submit">Submit</button>
            </div>
        </form>


    </div>
</body>

</html>