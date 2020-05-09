<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sumida Shop</title>
</head>
<body>
    <header>
        <h1>Sumida Shop</h1>
        Search: <input type="text" id="searchbar" placeholder="Search...but this doesn't work">
    </header>
    <hr>
    <h2>A place where you can buy anything... or just these five choices</h2>
    <form action="cart.php" method="POST" id="theform">
        <input type="checkbox" name="items[]" value="10">Computer Science for Dummies - $10<br>
        <input type="checkbox" name="items[]" value="25">A Nerdy T-Shirt - $25<br>
        <input type="checkbox" name="items[]" value="50">Ultimate Pilot Pen Collection - $50<br>
        <input type="checkbox" name="items[]" value="1000">Rights to the name X Æ A-12 - $1,000<br>
        <input type="checkbox" name="items[]" value="500000">The first CyberTruck - $500,000<br>
        <input type="submit" value="View Cart">
    </form>
</body>
<h2>A Little Information About The Products...</h2>
<section id="item1">
    <img src="dummies.jpg">
    <h3>XML For Dummies</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo minus et 
        asperiores consectetur ipsam odio voluptas facilis ipsum sint in nobis consequatur 
        unde repellat, sit voluptates, optio itaque accusamus necessitatibus.</p>
</section><hr>
<section id="item2">
    <img src="nerd.jpg">
    <h3>A Nerdy T-Shirt</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto repellat, delectus qui 
        excepturi aspernatur nobis vel adipisci nostrum voluptas nihil. Molestias fugit ab natus 
        inventore quasi libero sequi, omnis sit.</p>
</section><hr>
<section id="item3">
    <img src="pilot.jpg">
    <h3>A Wild Collection of Pilot Ballpoint Pens</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a officia impedit expedita
        voluptates dolore ratione tempora ab, iure temporibus ducimus modi eveniet eos error obcaecati n
        umquam omnis corporis pariatur.</p>
</section><hr>
<section id="item4">
    <img src="musk.jpg">
    <h3>The Rights to the name X Æ A-12</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quia id obcaecati labore 
        culpa voluptatum iusto error adipisci veritatis corporis magnam non ab, ipsa esse voluptatibus? 
        Sequi aspernatur maiores animi.</p>
</section><hr>
<section id="item5">
    <img src="cybertruck.jpg">
    <h3>Access to the First CyberTruck</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident recusandae quo, cupiditate quas
        cumque vel voluptatem? Unde est incidunt offi
        cia consectetur odit vero ipsa ut quia, nemo distinctio quaerat quis.</p>
</section>
</html>