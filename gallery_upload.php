<?php

if (isset($_POST['submit'])) {

    $newFileName = $_POST['filename'];
    if ($_POST['filename']) {
        $newFileName = "gallery";
    } else {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }

    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];

    $file = $_FILES['file'];

    print_r($file);

}

$fileName = $file["name"];
$fileType = $file["type"];
$fileTempName = $file["temp_name"];
$fileError = $file["error"];
$fileSize = $file["size"];

$fileExt = explode(".", $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array("jpg", "jpeg", "png");

if (in_array($fileActualExt, $allowed)) {
    if ($fileError == 0) {
        if ($fileSize > 2000000) {
            $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
            $fileDestination = "imgs/" . $imageFullName;

            include "connect.php";

            if (empty($imageTitle) || empty($imageDesc)) {
                header("Location:index.html?upload=empty");
                echo "fields should not be empty";
                exit();
            } else {
                $sql = "SELECT * FROM gallery;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                   echo "SQL Statement Failed!";
                }else{
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    $rowCount = mysqli_num_rows($result);
                    $setImageOrder = $rowCount + 1;

                    $sql = "INSERT INTO gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery) VALUES (?, ?, ?, ?); ";
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        echo "SQL Statement Failed!";
                }else {
                    mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                    mysqli_stmt_execute($stmt);

                    move_uploaded_file($fileTempName, $fileDestination);

                }
            }

        } else {
            echo "file size is too big";
            exit();
        }
    } else {
        echo "You had an error!";
        exit();
    }
} else {
    echo "You need to upload a proper file type!";
    exit();
}



?>