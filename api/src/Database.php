<?php

class Database {

    static public $conn = null;
    static private $host = 'localhost';
    static private $login = 'root';
    static private $pass = 'coderslab';
    static private $db = 'booksInfo';

    static public function getConnection() {
        self::$conn = new mysqli(self::$host, self::$login, self::$pass, self::$db);
        if (mysqli_connect_errno()) {
            echo 'There was an error' . mysqli_connect_error();
            die;
        } else {
            return self::$conn;
        }
    }

    static public function closeConnection() {
        self::$conn->close();
        self::$conn = null;
    }

}
