<?php
$json = file_get_contents('books.json') ;
$bookJson = json_decode($json, true) ;
$index = $_POST['index'] ;
?>

<?php
  if($bookJson){
    unset($bookJson[$index]) ;
    print_r($bookJson);

    $bookJson = json_encode($bookJson) ;
    file_put_contents('books.json', $bookJson) ;
    header('Location: index.php') ;
  }
  else{
    echo "Failed" ;
  }