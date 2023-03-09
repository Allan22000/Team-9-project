<?php
include 'header.php';
?>

<style>
    <?php include('../css/memories.css'); ?>
</style>

<div class="memoriesSection">
    <?php
    // connecting to the database
    include '../database/db.php';

    // checking if the connection was successful
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // inserting form data into the table
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];

        // validating name
        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            echo "<script>alert('Name can only contain letters and whitespace');</script>";
            echo "<script>window.location.href='memories.php';</script>";
        }

        if (empty($name)) {
            echo "<script>alert('Name field cannot be empty');</script>";
        } else {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            // Valid extensions
            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));

            if ($_FILES["image"]["error"] === 4) {
                echo "<script>alert('Image does not exist');</script>";
            } elseif (!in_array($imageExtension, $validImageExtension)) {
                echo "<script>alert('Invalid image extension');</script>";
                // Max 1mb filesize
            } elseif ($fileSize > 1000000) {
                echo "<script>alert('Image size is too large');</script>";
            } else {
                $newImageName = 'img_' . time() . '_' . uniqid() . '.' . $imageExtension;
                move_uploaded_file($tmpName, 'img/' . $newImageName);
                $query = "INSERT INTO memories (name, image) VALUES ('$name', '$newImageName')";
                mysqli_query($conn, $query);
                echo "<script>alert('Successfully added'); document.location.href = 'data.php';</script>";
            }
        }
    }
    
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Image Upload</title>
    </head>

    <body>
        <div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)"
            class="jumbotron bg-cover text-white">
            <div class="container py-5 text-center">
                <h2 class="display-4 font-weight-bold">Share Your Favourite Real Madrid Moment With Us!</h2>
                <br>

                <a href="data.php" role="button" class="btn btn-primary px-5">View Memories</a>
            </div>
        </div>
        <br>
        <div class="container100">
            <p>Hello 👋</p>
            <section class="animation">
                <div class="first">
                    <div>A Real Madrid Fan?</div>
                </div>
                <div class="second">
                    <div>Any Memorable Pic?</div>
                </div>
                <div class="third">
                    <div>Share It With Us!</div>
                </div>
            </section>
        </div>

        <!-- Uploading Image -->
        <form class="" action="" method="post" enctype="multipart/form-data">
            <label for="name">
                <h2>Your Name</h2>
            </label>
            <input type="text" name="name" id="name" required value="">
            <br>
            <label for="image">
                <h4>Image</h4>
            </label>
            <input class="choosefile" type="file" name="image" id="image" accept=".jpg, .jpeg .png" value=""> <br>
            <button type="submit" name="submit">Submit</button>
            <br> <br>
        </form>
    </body>

    </html>
</div>
<?php
include 'footer.php';
?>