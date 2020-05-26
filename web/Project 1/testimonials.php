<?php
    require ("DbConnect.php");
    $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
</head>
<body>
    <header>
        <h1 class="Logo">The Recessed Light Guy</h1>
        <a href="rlg.html">Home</a> <a href="about.html">About</a> <a href="testimonials.php">Testimonials</a> <a href="gallery.html">Gallery</a> <a href="contact.php">Contact</a>
    </header>
    <hr>
    <h2>Testimonials from our clients</h2>
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
    <h2>Leave us a Review:</h2>
    <form id="review" action="testimonialProcess.php" method="POST">
        Name: <input type="text" name="name"><br>
        Rating: <input type="number" min="1" max="5" name="rating" placeholder="1-5 inclusive"><br>
        Review: <textarea name="review" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Leave Review">
    </form>
</body>
</html>