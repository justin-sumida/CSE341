<?php
    require 'ta051.php';
    $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Recessed Light Guy</title>
</head>
<body>
    <h1>The Recessed Light Guy</h1>
    <hr><br>
    <h2>Reviews:</h2>
    <p> <?php
       $statement = $db->prepare("SELECT review, contentReview, name FROM userReview");
       $statement->execute();
      
       while ($row = $statement->fetch(PDO::FETCH_ASSOC))
       {
           $review = $row['review'];
           $content = $row['contentReview'];
           $name = $row['name'];
       
           echo "<p><strong>$name $review</strong> - \"$content\"<p>";
       }
       
        ?>
    </p>

</body>
</html>