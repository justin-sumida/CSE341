<?php
    require ("DbConnect.php");
    $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rlg.css">
    <title>Testimonials</title>
    <style>
        .left{
            float: left;
        }
        .right{
            float: right;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="Logo">The Recessed Light Guy</h1>
       <ul>
        <li><a class="active" href="rlg.html">Home</a></li>
        <li><a href="testimonials.php">Testimonials</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
       </ul>
    </header>
    <hr>
    <div class="wrapper">
    <div class="left">
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
            Name:<br> <input type="text" name="name"><br>
            Rating:<br> <input type="number" min="1" max="5" name="rating" placeholder="1-5 inclusive"><br>
            Review:<br> <textarea name="review" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Leave Review">
        </form>
    </div>
    <div class="right">
        <img src="lightsvert.jpg">
    </div>
    </div>
    <footer>
        <p id="copyright">Copyright © 2020 The Recessed Light Guy</p>
    </footer>
</body>
</html>