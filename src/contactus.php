<?php
// connect to the database
include '../crud/db.php';

// check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// insert form data into the table
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo 'Data inserted successfully';
    } else {
        echo 'Error inserting data: ' . mysqli_error($conn);
    }
}

// close the database connection
mysqli_close($conn);
?>
