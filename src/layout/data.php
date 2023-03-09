<?php
include 'header.php';
?>

<style>
    <?php include('../css/data.css'); ?>
</style>

<?php
// connecting to the database
include '../database/db.php';

// checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// querying data from the database
$rows = mysqli_query($conn, "SELECT * FROM memories ORDER BY id DESC");

if ($rows) {
    ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Data</title>
    </head>

    <body>
        <br>
        <br>
        <br>
        <table border=30 cellspacing=10 cellpadding=20 style="background-color:white; class=" form">
            <tr>
                <td>#</td>
                <td>Persons Name</td>
                <td>Memory Image</td>
            </tr>
            <?php
            $i = 1;
            foreach ($rows as $row): ?>
                <tr>
                    <td>
                        <?php echo $i++; ?>
                    </td>
                    <td>
                        <?php echo $row["name"]; ?>
                    </td>
                    <td> <img src="img/<?php echo $row["image"]; ?>" width=600"
                            title="<?php echo $row['image']; ?>"> </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <input type="button" onclick="window.location.href='memories.php';" value="Upload New Memory" />
    </body>

    </html>
    <?php
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
<?php
include 'footer.php';
?>