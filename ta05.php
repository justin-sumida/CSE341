<?php
    require 'ta051.php';
    $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teach 05</title>
</head>
<body>
    <h1>Scripture Resources</h1>
    <p> <?php
       $statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
       $statement->execute();
      
       while ($row = $statement->fetch(PDO::FETCH_ASSOC))
       {
           $book = $row['book'];
           $chapter = $row['chapter'];
           $verse = $row['verse'];
           $content = $row['content'];
       
           echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
       }
       
        ?>
    </p>
</body>
</html>