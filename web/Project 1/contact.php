<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <header>
        <h1 class="Logo">The Recessed Light Guy</h1>
        <a href="rlg.html">Home</a> <a href="about.html">About</a> <a href="testimonials.php">Testimonials</a> <a href="gallery.html">Gallery</a> <a href="contact.php">Contact</a>
    </header>
    <h1>Contact Us:</h1>

    <form action="contactProcess.php" method="POST">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        Content:<br> <textarea name="contact" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Send Message">
    </form>
</body>
</html>