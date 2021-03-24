<?php

class OneBook extends OnTheBookShelf {
    private $title;
    private $author;
    function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }
    function getBookInfo($bookToGet) {
        if (1 == $bookToGet) {
            return $this->title." by ".$this->author;
        } else {
            return FALSE;
        }
    }
    function getBookCount() {
        return 1;
    }
    function setBookCount($newCount) {
        return FALSE;
    }
    function addBook($oneBook) {
        return FALSE;
    }
    function removeBook($oneBook) {
        return FALSE;
    }
}