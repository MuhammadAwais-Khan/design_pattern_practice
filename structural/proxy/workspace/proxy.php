<?php

require_once ('../ProxyBookList.php');
require_once ('../BookList.php');
require_once ('../Book.php');

writeln( 'BEGIN TESTING PROXY PATTERN');
writeln('');

$proxyBookList = new ProxyBookList();
$inBook = new Book('PHP for Cats','Larry Truett');
$proxyBookList->addBook($inBook);

writeln('test 1 - show the book count after a book is added');
writeln($proxyBookList->getBookCount());
writeln('');

writeln('test 2 - show the book');
$outBook = $proxyBookList->getBook(1);
writeln($outBook->getAuthorAndTitle());
writeln('');

$proxyBookList->removeBook($outBook);

writeln('test 3 - show the book count after a book is removed');
writeln($proxyBookList->getBookCount());
writeln('');

writeln('END TESTING PROXY PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}