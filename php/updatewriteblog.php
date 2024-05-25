<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body>

    <div class="updateform">

        <?php
        include ('./connect.php');

        if ($_POST['id']) {
            $id = $_POST['id'];


            $sqlQuery = "SELECT * FROM blogs WHERE id='$id'";
            $result = mysqli_query($conn, $sqlQuery);
            $row = $result->fetch_assoc();

            echo '  

               <form action="./update.php" method="post">
            <div class="fields">
                <label for="">Title</label>
                <input type="text" name="title" value="'.$row['title'].'" id=""><br>
            </div>
            <div class="fields">
                <label for="">Image</label>
                <input type="text" name="image" value="'.$row['image'].'" id=""><br>
            </div>
            <div class="fields">
                <label for="">Text Content</label>
                <textarea type="" name="content"  value="'.$row['content'].'" id="" rows="10" cols="70"></textarea><br>
            </div>
  
           <input type="hidden"  name="id" value="' . $row['id'] . '"/>
    
                    <button type="submit" class="btn btn-primary"> Update </button>
                </form>
                    
                    ';

        }



        ?>

    </div>
</body>

</html>