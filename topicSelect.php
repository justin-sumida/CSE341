<?php   
    require('ta051.php');
    $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topic Select</title>
</head>
<body>
    <h1>Enter a Scripture and it's Topic:</h1>
    <form id="mainform" action="topicInsert.php" method="POST">
        Book <input type="text" name="book" id="book"><br>
        Chapter <input type="text" name="chapter" id="chapter"><br>
        Verse <input type="text" name="verse" id="verse"><br>
        Content<br>
        <textarea id="content" name="content" rows="4" cols="50"></textarea><br>
        Topics:

        <?php
            try{
                $statement = $db->prepare('SELECT id, name FROM topics');
                $statement->execute();
                
                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	            {
		            $id = $row['id'];
                    $name = $row['name'];
                    echo "<input type='checkbox' name='topics[]' id='topics$id' value='$id'>";
                    echo "<label for='topics$id'>$name</label><br />";
                    echo '\n';
                }
            }
            catch(PDOException $ex){
                echo "Error connecting to DB. Details: $ex";
	            die();
            }
            ?>
        <br>
        <input type='submit' value="Add to the DB">
    </form>
</body>
</html>