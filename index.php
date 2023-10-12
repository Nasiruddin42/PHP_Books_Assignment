<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$json = file_get_contents('books.json') ;
$bookJson = json_decode($json, true) ;
?>
<a href = "form.php"> Add Book </a>
<form action="search.php" method="get">
    <input type="text" name="query" id="query">
    <button type="submit">Search</button>
</form>
<table border = "1" width = "900">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>Isbn</th>
        <th>Actions</th>
    </tr>
    <?php $index = 0; ?>
    <?php foreach ($bookJson as $book): ?>
    <tr>
        <td><?php echo $book['title']; ?> </td>
        <td><?php echo $book['author']; ?> </td>
        <td><?php echo $book['available']; ?> </td>
        <td><?php echo $book['pages']; ?> </td>
        <td><?php echo $book['isbn']; ?> </td>
        <td>
            <a href = "edit.php?index=<?php echo $index ?>"> Edit </a>
            <form action="deleteAction.php" method = "POST">
                <input type="hidden" name="index" value ="<?php echo $index ?>">
                <button type ="sumbit">Delete</button>
            </form>
        </td>
    </tr>
    <?php $index++; endforeach; ?>

</table>


</body>
</html>