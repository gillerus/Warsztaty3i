<?php

class Book {

    private $id;
    private $name;
    private $author;
    private $description;

    public function __construct() {
        $this->id = -1;
    }

    public function loadFromDB($conn, $id) {
        $result = $conn->query("SELECT * FROM books" . (is_null($id) ? '' : ' WHERE id=' . $id));
        $books = [];
        while ($row = $result->fetch_assoc()) {
            $books[] = $row;
        }

        if (!is_null($id)) {
            return $books[0];
        } else {
            return $books;
        }
    }

    public function create($conn, $name, $author, $description) {
        
    }

    public function update($conn, $id, $name, $author, $description) {
        
    }

    public function deleteFromDB($conn, $id) {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

}