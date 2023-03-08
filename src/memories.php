<?php
// connecting to the database
include 'db.php';

// checking if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// inserting name, image to the database
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    if (empty($name)) {
        echo "<script>alert('Name field cannot be empty');</script>";
    } else {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
    <form class="" action="" method="post" enctype="multipart/form-data">
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" required value="">
        <br>
        <label for="image">Image : </label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg .png" value=""> <br> <br>
        <button type="submit" name="submit">Submit</button>
        <br> <br>
        <a href="data.php">Data</a>
    </form>
</body>

</html>