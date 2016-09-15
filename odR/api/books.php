<?php

include('src/Database.php');
include('src/Book.php');

$conn = Database::getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $bookId = intval($_GET['id']);
    } else {
        $bookId = null;
    }

    $books = new Book();
    $booksList = $books->loadFromDB($conn, $bookId);
    echo json_encode($booksList);
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //var_dump($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    parse_str(file_get_contents("php://input"), $put_vars);
    //var_dump($put_vars);
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    parse_str(file_get_contents("php://input"), $del_vars);
    //var_dump($del_vars);
}
