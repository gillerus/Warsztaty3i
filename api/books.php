<?php

//tu będziemy się łączyć za pomocą ajax'a

include ('src/Database.php');
include ('src/Book.php');

$conn = Database::getConnection();

//sprawdzamy jaką metodą przyszły dane
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $bookId = intval($_GET['id']);
    } else {
        $bookId = null;
    }
    $books = new Book();
    $booksList = $books->loadFromDB($conn, $bookId);
    print_r($booksList);

//    echo("GET<br>");
//    var_dump($_GET);
} elseif ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    parse_str(file_get_contents("php://input"), $put_vars);
//    echo("PUT<br>");
//    var_dump($put_vars);
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    echo("DELETE<br>");
    parse_str(file_get_contents("php://input"), $del_vars);
//    var_dump($del_vars);
}