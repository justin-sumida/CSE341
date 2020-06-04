<?php
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    require ("DbConnect.php");
    $db = get_db();
    try{
        $query = 'INSERT INTO userreview(review, contentReview, name) VALUES(:rating, :review, :name)';
        $statement = $db->prepare($query);
        $statement->bindValue(':rating', $rating);
        $statement->bindValue(':review', $review);
        $statement->bindValue(':name', $name);

        $statement->execute();

        
    }
    catch (Exception $ex)
    {
	    echo "Error with DB. Details: $ex";
	    die();
    }   
    header("Location: testimonials.php");

    die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>