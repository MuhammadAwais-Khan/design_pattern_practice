<?php

class BookAdapter {
    private $book;
    function __construct(SimpleBook $book_in) {
        $this->book = $book_in;

        // practicing
//         echo '<pre>start';
//         print_r($this->book->);
//         echo '<pre>end';
    }
    function getAuthorAndTitle() {
        return $this->book->getTitle().' by '.$this->book->getAuthor();
    }
}