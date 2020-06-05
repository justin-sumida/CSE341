<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="rlg.css">
    <title>Contact Us</title>
    <style>
        .row {
          display: flex;
          margin-top: 10px;
        }
        
        
        .column {
          flex: 50%;
          padding: 20px;
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
        <h2>Contact Us:</h2>
        <div class="row">
            <div class="column">
                <p>Do you have a question for us? Are you looking to receive an estimate?
                   If so, gives us a call at (951) 123-4567 or fill out the simple form. 
                   If you choose to fill out the form, we will review your information and 
                   call you back to discuss your lighting issue and offer to provide an onsite
                   estimate for the work.</p>
            </div>
            <div class="column">
                <form action="contactProcess.php" method="POST">
                    Name:<br> <input type="text" name="name"><br>
                    Email:<br> <input type="email" name="email"><br>
                    Content:<br> <textarea name="contact" rows="4" cols="50"></textarea><br>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p id="copyright">Copyright © 2020 The Recessed Light Guy</p>
    </footer>
</body>
</html>