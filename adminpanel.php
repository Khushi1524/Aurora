<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy-2JZ3DIUsOsrvQeaCsqGlDfc5BOa3HpWXw&usqp=CAU');
        }

        .table {
            padding: 110px 150px;
        }

        .table table thead tr {
            background: rgb(162, 243, 162);
            color: black;
        }

        .table table thead tr th {
            padding: 20px;
            font-size: 20px;
        }

        .table tbody {
            background: rgb(91, 90, 90);
        }

        .table tbody td {
            padding: 30px;
            font-size: 18px;
            color: #fff;
        }

        .table tbody .line-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 8;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .table button {
            padding: 16px 10px;
            width: 100px;
            font-size: 15px;
            color: #fff;
            background: red;
            border-radius: 8px;
            margin-top: 50px;
        }

        .table button:hover {
         background-color: rgba(255, 15, 15, 0.804);;
        }

        .table #update{
            padding: 16px 10px;
            width: 100px;
            font-size: 15px;
            color: #fff;
            background: rgb(245, 108, 23);
            border-radius: 8px;
            margin-top: 50px;
        }

        .table #update:hover{
            background: rgb(240, 120, 20);
        }

        .table tbody img {
            max-width: 250px;
        }
    </style>
</head>

<body>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ('./php/connect.php');

                $sqlQuery = "SELECT * FROM blogs";
                $result = mysqli_query($conn, $sqlQuery);
                while ($row = $result->fetch_assoc()) {
                    echo '
                            
                                <tr class="">
                                <td scope="row">' . $row['title'] . '</td>
                                <td><img src="' . $row['image'] . '" alt=""></td>
                                <td class="line-clamp" >' . $row['content'] . '</td>

                                <td>
                        
                                <form action="./php/updatewriteblog.php" method="post">
            <input type="hidden" name="id" value="' . $row['id'] . '">
            <button id="update" type="submit" class="btn btn-primary">
                Update </button>
        </form>

        <form action="./php/delete.php" method="post">
        <input type="hidden" name="id" value="' . $row['id'] . '">
        <button type="submit" class="btn btn-primary">
           Delete</button>
    </form>
                                
                                
                                </td>
                            </tr>
                            
                            ';

                }


                ?>
            </tbody>
        </table>

    </div>

</body>

</html>
</div>