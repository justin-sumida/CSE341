<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];

    require ("DbConnect.php");
    $db = get_db();
    try{
        $query = 'INSERT INTO userreview(name, email, contact) VALUES(:name, :email, :contact)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':contact', $contact);
        $statement->execute();

        
    }
    catch (Exception $ex)
    {
	    echo "Error with DB. Details: $ex";
	    die();
    }   
    header("Location: contact.php");

    die();
?>