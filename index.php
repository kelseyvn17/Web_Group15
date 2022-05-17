<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Insta</title>
    </head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <label for="description">description</label>
        <input type="text" name="description" maxlength=50><br><br>

        <p>Choose mode view to upload: </p>
        <label>Public</label>
        <input type="submit" name="public" value="Submit">
        <label>Internal</label>
        <input type="submit" name="internal" value="Submit">
        <label>Private</label>
        <input type="submit" name="private" value="Submit">

    </form>
<?php
    $dirname = "IMG/";
    $img = glob($dirname."*.{jpg, jpeg, png, gif}", GLOB_BRACE);
    $sort = array();

    foreach($img as $image){
        $sort[$image]=filemtime($image);
    }
    arsort($sort);

    foreach($sort as $image => $time){
        echo "<img src='$image' style='max-width:500px, max: height 500px;px;' />";
        echo "<br>";
        echo "Name: ";
        $description = preg_replace('/.jpeg||.png||.jpg||.gif/', '', basename($image));
        echo $description;
        echo '<br>';
    };
?>
</body>
</html>
