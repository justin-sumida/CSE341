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
        input[type=text], input[type=email], textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: rgb(36, 36, 36);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover{
            background-color: rgb(27, 27, 27);
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