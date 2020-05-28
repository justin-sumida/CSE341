<?php
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    require ("DbConnect.php");
    $db = get_db();
    try{
        $query = 'INSERT INTO userreview(review, contentReview, name) VALUES(:rating, :review, :name)';
        $statement->bindValue(':rating', $rating);
        $statement->bindValue(':review', $review);
        $statement->bindValue(':name', $name);

        $statement->execute();

        $statement = $db->prepare($query);
    }
    catch (Exception $ex)
    {
	    echo "Error with DB. Details: $ex";
	    die();
    }   
    header("Location: testimonials.php");

    die();
?>