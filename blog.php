<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <style>
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
            max-width: 80%;
            min-height: 50vh;
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
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .blogs .stru {
            max-width: 350px;
            max-height: 450px;
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
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

        .blogs .stru p {
            padding: 20px;
            font-size: 17px;
            text-overflow: ellipsis;
            height: 100px;
            overflow: hidden;
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
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae expedita molestias esse.
                    Aut, ex nulla? Alias dolor odit, voluptate necessitatibus illo eum labore quidem praesentium
                    suscipit
                    rerum odio nulla dolores nam, dignissimos maxime cum aperiam culpa? Quidem fugit hic expedita,
                    illum, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati porro maiores
                    reprehenderit deserunt dolor tempora! </p>
            </div>
            <a href="writeblog.php"><button>Write a blog</button></a>
        </div>
    </div>

    <div class="blogs">

        <?php

        include ('./php/connect.php');

        $sqlQuery = "SELECT * FROM blogs";
        $result = mysqli_query($conn, $sqlQuery);
        while ($row = $result->fetch_assoc()) {
            echo '
                 <div class="blogs">
                 <div class="stru">
                   <img src=' . $row['image'] . ' alt="">
                      <h3>' . $row['title'] . '</h3>
                      <p>' . $row['content'] . '</p>
                    </div>
                </div>

    ';
        }
        ?>
    </div>


</body>

</html>