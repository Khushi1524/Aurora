<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy-2JZ3DIUsOsrvQeaCsqGlDfc5BOa3HpWXw&usqp=CAU');
        }

        .fullblog{
            padding: 50px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .fullblog .structure{

        }

        .fullblog .structure .titlebx{
          
        }

        .fullblog .structure .imgbx{

        }

        .fullblog .structure .imgbx img{
            width: 200px;
            height: 300px;
        }
    </style>
</head>

<body>
    <div class="fullblog">

        <?php

        include ('./php/connect.php');

        $sqlQuery = "SELECT * FROM blogs ORDER BY id DESC";
        $result = mysqli_query($conn, $sqlQuery);
        while ($row = $result->fetch_assoc()) {
            echo '


            <div class="structure">
            <div class="titlebx"><title>'.$row['title'].'</title></div>
            <div class="imgbx">    <img src="'.$row['image'].'" alt=""></div>
            <div class="contentbx">   <p>'.$row['content'].'</p></div>

            </div>
';
        }
        ?>
    </div>
</body>

</html>