<?php
include ('./php/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            outline: none;
        }

        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy-2JZ3DIUsOsrvQeaCsqGlDfc5BOa3HpWXw&usqp=CAU');
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 75px 100px;
        }

        .container .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container .content h2 {
            font-size: 34px;
            color: #fff;
            margin-bottom: 30px;
        }

        .container .content button,  .container .content #label {
            padding: 16px 10px;
            width: 150px;
            font-size: 15px;
            color: #fff;
            background: black;
            border-radius: 8px;
        }

        .container .content button:hover, .container .content #label:hover {
            color: black;
            font-weight: 600;
            background: rgb(91, 217, 108);
            background: linear-gradient(90deg, rgba(91, 217, 108, 1) 32%, rgba(115, 207, 226, 1) 100%);
            box-shadow: 0 2px 24px 0 rgb(203, 75, 207), 0 6px 16px 0 rgb(213, 75, 223);
        }

        .container .imgs {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .container .imgs img {
            width: 350px;
            height: 60vh;
            border-radius: 20%;
        }

        form input{
            display: none;
        }
    </style>
</head>

<body>
    <?php
    include ('./php/nav.php');
    ?>

    <div class="container">
        <div data-aos="fade-up" class="content">
            <h2>GALLERY</h2>

            <?php

            if (!isset($_SESSION['userlogin']) && !$_SESSION == true) {
                echo ' <a href="./authentications/login.html"><button>UPLOAD SOME IMAGES</button></a> ';
            } else {
                echo '
                <form action="./php/upload.php" method="post" enctype="multipart/form-data">
                 <label id="label" for="choosefile">Choose file</label>
                    <input type="file" name="image" id="choosefile"/>
                    <button type="submit" name="submit">Submit</button>
                </form>';
            }
            ?>

        </div>

        <div class="imgs">
            <?php
            $res = mysqli_query($conn, "SELECT * FROM images ORDER BY id DESC");

            // Check if there are any rows returned
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <img src="images/<?php echo $row['file'] ?>" />
                    <?php
                }
            } else {
                // Display a message if no images are uploaded
                echo "No image uploaded.";
            }
            ?>
        </div>

    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
        });
    </script>
</body>

</html>