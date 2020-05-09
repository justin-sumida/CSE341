<?php
    $items = $_POST['items'];
    session_start();
    $_SESSION['items'] = $items;
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
    <h2>Your Cart:</h2>
    <p><?php 
       foreach($items as $item)
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
          }
          ?>
    <form action="browse.php" method="POST">
        <input type="submit" value="Back to Browse">
    </form>
    <form action="checkout.php" method="POST">
        <input type="submit" value="Checkout">
    </form>

</body>
</html>