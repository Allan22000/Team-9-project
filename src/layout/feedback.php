<?php
include 'header.php';
?>  

<style>
<?php include('../css/feedback.css'); ?>
</style>



<div class = "wholeSection">


<div class = "section1">

    <h1>Please rate our page</h1>

<form method = "post" action = "" id = "form">
    <fieldset class="=rating">   
        <input type = "radio" id = "star1" name = "rating" value = "1" required>
        <label for= "star1">bad</label> 
        <input type = "radio" id = "star2" name = "rating" value = "2" required>
        <label for= "star2">okay</label> 
        <input type = "radio" id = "star3" name = "rating" value = "3" required>
        <label for= "star3">good</label> 
        <input type = "radio" id = "star4" name = "rating" value = "4" required>
        <label for= "star4">very good</label> 
        <input type = "radio" id = "star5" name = "rating" value = "5" required>
        <label for= "star5">excellent</label> 
</fieldset>          
</div>

<div class = "section2">
    <h1>Would you like to give us a feedback?</h1>

    <textarea name= "feedback" id= "feedback" placeholder="please write us your review"></textarea>
       
</div>
<div class = "section3">
<input type="submit" id = "submit" name = "submit" value = "submit">
</div>

</form>
</div>

<?php 
include '../database/db.php';
if(isset($_POST['submit'])) {

$star = $_POST['rating'];
$feedback =$_POST['feedback'];



$sql = "insert into feedback(rating, comment) values('$star', '$feedback')";

if ($conn -> query($sql) === TRUE) {
    echo "Thank you for the feedback";
}

else {
    echo "Error: " . $conn -> error;
}

}





?>


<?php
include 'footer.php';
?>  