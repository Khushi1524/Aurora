<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
            padding: 50px;
            padding-top: 130px;
        }

        .container .banner {
            width: 80%;
            height: 50vh;
            background-image: url("https://i.pinimg.com/564x/c1/12/4a/c1124ae20ac3a1025ed738906708ea8f.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container .banner .text {
            background: rgb(55, 220, 151, 0.11);
            border-radius: 60px;
        }

        .container .banner .text p {
            padding: 50px;
            font-size: 18px;
            color: white;
        }

        .container .banner button {
            padding: 16px 10px;
            width: 150px;
            font-size: 15px;
            color: #fff;
            background: black;
            border-radius: 8px;
            margin-top: 20px;
        }

        .container .banner button:hover {
            color: black;
            font-weight: 600;
            font-size: 16px;
            background: rgb(91, 217, 108);
            background: linear-gradient(90deg, rgba(91, 217, 108, 1) 32%, rgba(115, 207, 226, 1) 100%);
            box-shadow: 0 2px 24px 0 rgb(203, 75, 207), 0 6px 16px 0 rgb(213, 75, 223);
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

        .line-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        @media (width<450px) {

            .container {
                padding-top: 20px;
                padding: 25px;
                
            }

            .container .banner {
                width: 60vh;
                height: 65vh;
            }

            .container .banner .text {
                background: none;
            }

            .container .banner .text p {
            padding: 10px;
            font-size: 15px;
            letter-spacing: 0.2px;
            line-height: 20px;
            color: white;
        }

            .blogs .stru {
                width: 70vw;
                height: 50vh
            }

            .blogs .stru img {
                width: 100%;
                height: 60%;
            }


            .blogs .stru h3 {
                font-size: 17px;
                padding: 0 20px;
            }

            .blogs .stru .box {
                padding: 10px 20px;
            }

        }
    </style>
</head>

<body>
    <?php
    include ('./php/nav.php');

    ?>

    <div class="container">
        <div class="banner">
            <div class="text">
                <p>Embark on an Adventure: Share Your Northern Lights Experience with the World. From captivating
                    photographs to heartfelt stories, our blog section is a space where you can showcase your
                    unforgettable moments under the aurora-filled skies. Join our community and inspire others with your
                    unique encounters, creating a tapestry of shared wonder and awe.</p>
            </div>
            <a href="writeblog.php"><button>Write a blog</button></a>
        </div>
    </div>

    <div class="blogs">

        <?php

        include ('./php/connect.php');

        $sqlQuery = "SELECT * FROM blogs ORDER BY id DESC";
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