<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prove02.css">
    <title>Justin Sumida's Homepage</title>
</head>
<body>
    <h1>Justin Sumida's Homepage</h1>
    <div id="link">
        <a href="prove021.php">My Index Page</a>
    </div>
    <br><br>
    <div class="polaroid">
        <img src="me.jpg" alt="Me before quarantine">
            <div class="container">
                <p> Me before quarantine, when I dressed up everyday! </p>
            </div>
    </div>

    <h2>A little about me, if you're interesting that is...</h2>
    <p id="description">My name is Justin Sumida, as you can see everywhere on this page! I hail from
       Temecula, California which I've learned is much different from Rexburg. I'm a 
       Computer Science major, and this is my fifth semester in the program. I've 
       learend I have a niche for Web Engineering and have come to enjoy design and
       development, hence why I'm taking this class. 

       Aside from my education, I love the outdoors. Coming to Rexburg was a big blessing
       because of how much there is to do in the outdoors. The Teton's and Yellowstone are
       in our backyard and I love it. I'm also a big photographer and videographer, despite
       the fact I haven't really been able to do so lately. Lastly, I am a huge baseball 
       fan. Despite the fact I am not as talented, I love watching and rooting on my hometeam,
       the Angels.</p>
    <p> <?php 
    $date = date('Y/m/d H:i:s');
    echo $date;
    ?></p>
</body>
</html>