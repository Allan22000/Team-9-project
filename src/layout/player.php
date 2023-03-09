<?php
include '../database/db.php';
include 'header.php';
?>

<?php
    $playerNames = array();

    $sql = "SELECT * FROM player";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // fetching data

        while($row = $result->fetch_array())
        {
            array_push($playerNames, (object)[
                'id'=>$row["id"], 
                'firstName'=>$row["firstName"],
                 'rating'=>$row["rating"]]);
        }
    }
    else {
        echo 'error';
        $error = 'error occured';
    }
    
?>

<!DOCTYPE html>
<html>
<head>
<style>

.players {
  margin-top:150px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:150px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<div class="players">
<h2>Players</h2>
<table>

  <tr>
    <th>Player ID</th>
    <th>Player Name</th>
    <th>Rating</th>
  </tr>
    <?php foreach($playerNames as $obj)
    {
    echo "<tr>";
    echo "<td>".$obj->id."</td>";
    echo "<td>".$obj->firstName."</td>";
    echo "<td>".$obj->rating."</td>";
    echo "</tr>";
    }
    ?>
  
</table>

</div>
</html>
<?php
include 'footer.php';
?>