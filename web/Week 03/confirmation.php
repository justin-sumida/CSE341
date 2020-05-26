<?php
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $zip = htmlspecialchars($_POST['zip']);
    session_start();
    $items = $_SESSION['items'];
    $sum = 0;
?>
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
    <h2>Order Confirmation</h2>
    <hr>
    <h3>Shipping to...</h3>
    <p><?php
        echo $name . "<br>" . $address . "<br>" . $city . ", " . $state . " " . $zip . "<br>";
        ?></p>
    <p><?php 
        foreach($items as $item){
            $sum += $item;
            if ($item == 10){
                echo "XML for Dummies - $" . $item . "<br>";
            }
            else if($item == 25){
                echo "Nerdy T-Shirt - $" . $item . "<br>";
            }
            else if($item == 50){
                echo "Wild Collection of Pilot Ballpoint Pens - $" . $item . "<br>";
            }
            else if($item == 1000){
                echo "The Rights to the name X Æ A-12 - $" . $item . "<br>";
            }
            else if($item == 500000) {
                echo "Access to the First CyberTruck - $" . $item . "<br>";
        }}
        echo "Total Cost: $" . $sum . "<br>";
    ?></p>
    <a href="browse.php">
        <button type="button">Back to Browse</button>
    </a>
</body>
</html>