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
       $statement = $db->prepare("SELECT review, contentreview, name FROM userReview");
       $statement->execute();
      
       while ($row = $statement->fetch(PDO::FETCH_ASSOC))
       {
           $review = $row['review'];
           $content = $row['contentreview'];
           $name = $row['name'];
       
           echo "<p><strong>$name $review</strong> - \"$content\"<p>";
       }
       
        ?>
    </p>
    <h2>Send A Message:</h2>
    <form id="contact">
       Name: <input type="text" name="name"><br>
       Email: <input type="text" name="email"><br>
       Message: <textarea rows="5" cols="80" name="message">
                </textarea><br>
       <input type="submit" value="Send Message">
    </form>
</body>
</html>