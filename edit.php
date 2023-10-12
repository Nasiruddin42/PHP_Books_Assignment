<?php
$json = file_get_contents('books.json') ;
$bookJson = json_decode($json, true ) ;

$index = $_GET['index'] ;
$bookToEdit = $bookJson[$index] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="post" action="editAction.php">
        <input type ="hidden" name = "indexToEdit" value ="<?php echo $index ?>" >

        <label for="title"> Title : </label>
        <input type ="text" id="title" name = "title" value = "<?php echo $bookToEdit['title'] ?>"  placeholder ="Type title" required>
        <br>
        <label for="author-name"> Author : </label>
        <input type ="text" id="author-name" name = "authorName" value = "<?php echo $bookToEdit['author'] ?>"  placeholder ="Type author name" required>
        <br>
        <label for ="available"> Available : </label>
        <input type ="text" id="available" name = "available" value = "<?php echo $bookToEdit['available'] ?>"  placeholder ="Type true/false" required>
        <br>
        <label for="page"> Pages : </label>
        <input type ="text" id="page" name = "pages" value = "<?php echo $bookToEdit['pages'] ?>"  placeholder ="Type page number" required>
        <br>
        <label for="isbn"> Isbn : </label>
        <input type ="text" id="isbn" name = "isbn" value = "<?php echo $bookToEdit['isbn'] ?>"  placeholder ="Type isbn" required>
        <br>
        <input type = "submit" value = "Submit" >
    </form>
</body>
</html>