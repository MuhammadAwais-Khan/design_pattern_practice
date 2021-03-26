<?php

class FlyweightFactory {
    private $books = array();
    function __construct() {
        $this->books[1] = NULL;
        $this->books[2] = NULL;
        $this->books[3] = NULL;
    }
    function getBook($bookKey) {
        if (NULL == $this->books[$bookKey]) {
            $makeFunction = 'makeBook'.$bookKey;
            $this->books[$bookKey] = $this->$makeFunction();
        }
        return $this->books[$bookKey];
    }
    //Sort of an long way to do this, but hopefully easy to follow.
    //How you really want to make flyweights would depend on what
    //your application needs.  This, while a little clumsy looking,
    //does work well.
    function makeBook1() {
        $book = new FlyweightBook('Larry Truett','PHP For Cats');
        return $book;
    }
    function makeBook2() {
        $book = new FlyweightBook('Larry Truett','PHP For Dogs');
        return $book;
    }
    function makeBook3() {
        $book = new FlyweightBook('Larry Truett','PHP For Parakeets');
        return $book;
    }
}