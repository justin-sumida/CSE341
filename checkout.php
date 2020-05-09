
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
    <h2>Checkout Information</h2>
    <form action="confirmation.php" method="POST">
        Name:<input type="text" name="name" id="name"><br>
        Address:<input type="text" name="address" id="address"><br>
        City:<input type="text" name="city" id="city"><br>
        State:<input type="text" name="state" id="state"><br>
        Zip Code:<input type="text" name="zip" id="zip"><br>
        <input type="submit" value="Confirm">
    </form>
    <a href="cart.php">
        <button type="button">Back to Cart</button>
    </a>
</body>
</html>