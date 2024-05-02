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
            padding: 35px 100px;
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
            padding: 20px;
        }

        .container .content p {
            font-size: 15px;
            color: #fff;
            margin-bottom: 20px;
        }

        .container .content button {
            padding: 8px 10px;
            font-size: 22px;
            font-weight: 550;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .container .content button:hover {
            background: rgb(55, 220, 151);
            color: #fff;
        }

        .container .imgs {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .container .imgs img {
            width: 350px;
            height: 60vh;
            border-radius: 20%;
        }
    </style>
</head>

<body>
    <?php
    include ('./php/nav.php');
    ?>

    <div class="container">
        <div data-aos="fade-up" class="content">
            <h2>AI IMAGES</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, unde?Lorem ipsum dolor sit amet
                consectetur adipisicing elit Quidem, enim?</p>
            <button>Upload Image</button>
        </div>

        <div data-aos="fade-up" class="imgs">
            <img src="https://i.pinimg.com/564x/da/93/86/da93863d2afda12940a702bc6b0820d2.jpg" alt="">
            <img src="https://i.pinimg.com/564x/da/93/86/da93863d2afda12940a702bc6b0820d2.jpg" alt="">
            <img src="https://i.pinimg.com/564x/da/93/86/da93863d2afda12940a702bc6b0820d2.jpg" alt="">
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