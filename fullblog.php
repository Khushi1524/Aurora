<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
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

        .fullblog {
            padding: 80px 180px;
        }

        .fullblog .structure {
            display: grid;
            place-items: center;
        }

        .fullblog .structure .titlebx {
            color: #fff;
            padding: 20px;
            font-size: 38px;
            font-weight: bold;
        }

        .fullblog .structure .imgbx {
            width: 700px;
            height: 650px;
            padding: 20px;
        }

        .fullblog .structure .imgbx img {
            width: 100%;
            height: 100%;
            border-radius: 20px;
        }

        .fullblog .structure .contentbx {
            font-size: 18px;
            letter-spacing: 0.8px;
            word-spacing: 1.5px;
            line-height: 27px;
            color: #fff;
        }


        .blogs {
            padding: 50px 30px;
            display: flex;
            flex-direction: row;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .blogs .stru {
            width: 350px;
            height: 450px;
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
        }

        .blogs .stru:hover {
            cursor: pointer;
        }

        .blogs .stru img {
            width: 350px;
            height: 280px;
        }

        .blogs .stru h3 {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-size: 20px;
        }

        .blogs .stru .box {
            padding: 20px;
        }

        .blogs .stru p {
            font-size: 17px;
        }

        @media (width<450px) {
            .fullblog {
                padding: 40px 30px;
            }

            .fullblog .structure .titlebx {
                font-size: 25px;
            }

            .fullblog .structure .imgbx {
                width: 80vw;
                height: 60vh;
            }

            .fullblog .structure .imgbx img {
                width: 100%;
                height: 100%;
            }

            .fullblog .structure .contentbx {
                font-size: 14px;
                letter-spacing: 0.6px;
                word-spacing: 1.2px;
                line-height: 24px;
            }

            .blogs .stru h3 {
                font-size: 17px;
            }


        }
    </style>
</head>

<body>
    <?php
    include ('./php/nav.php');
    ?>
    <div class="fullblog">

        <?php

        include ('./php/connect.php');

        if ($_GET['title']) {
            $title = $_GET['title'];


            $sqlQuery = "SELECT * FROM blogs WHERE title='$title'";
            $result = mysqli_query($conn, $sqlQuery);
            while ($row = $result->fetch_assoc()) {
                echo '


            <div class="structure">
            <div class="titlebx">' . $row['title'] . '</div>
            <div class="imgbx">    <img src="' . $row['image'] . '" alt=""></div>
            <div class="contentbx">   <p>' . $row['content'] . '</p></div>

            </div>
';
            }
        }
        ?>

    </div>



    <div class="blogs">

        <?php

        $sqlQuery = "SELECT * FROM blogs WHERE title!='$title' ORDER BY id ASC limit 3";
        $result = mysqli_query($conn, $sqlQuery);
        while ($row = $result->fetch_assoc()) {
            echo '
        
         <div class="stru" onclick="goto(\'./fullblog.php?title=' . $row['title'] . '\')" >
           <img src=' . $row['image'] . ' alt="">
              <h3>' . $row['title'] . '</h3>
              <div class="box">
              <p class="line-clamp">' . $row['content'] . '</p>
              </div>
            </div>
        

';
        }
        ?>

    </div>

    <script src="./script.js"></script>

</body>

</html>