<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="rlg.css">
    <title>Contact Us</title>
</head>
<body>
    <<header>
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
        <h1>Contact Us:</h1>

        <form action="contactProcess.php" method="POST">
            Name: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            Content:<br> <textarea name="contact" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Send Message">
        </form>
    </div>
    <footer>
        <p id="copyright">Copyright © 2020 The Recessed Light Guy</p>
    </footer>
</body>
</html>