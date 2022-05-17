<?php
if (isset($_POST['public']) or (isset($_POST['internal']))) {
    $file = $_FILES['file'];
    $description = $_POST['description'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower (end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 1000000) {
                $fileNameNew = $description.".".$fileActualExt;
                if (isset($_POST['public'])){
                    $fileDestination = 'IMG/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    copy('IMG/'.$fileNameNew,'internal/'.$fileNameNew);
                    copy('IMG/'.$fileNameNew,'private/'.$fileNameNew);
                    header("Location: index.php?uploadsuccess");
                } 
                if (isset($_POST['internal'])){
                    $fileDestination = 'internal/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    copy('internal/'.$fileNameNew,'private/'.$fileNameNew);
                    header("Location: index.php?uploadsuccess");
                }
                if (isset($_POST['private'])){
                    $fileDestination = 'private/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: index.php?uploadsuccess");
                } else {
                    echo "Exceed storage!";
                }
            } else {
            echo "Error for uploading file!";
        }
    } else {
        echo "Failed upload!";
    }
}
}
?>