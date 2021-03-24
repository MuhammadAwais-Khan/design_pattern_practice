<?php
require_once ('../SimpleBook.php');
require_once ('../BookAdapter.php');

// client
writeln('BEGIN TESTING ADAPTER PATTERN');
writeln('');

$book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");

$bookAdapter = new BookAdapter($book);
writeln('Author and Title: '.$bookAdapter->getAuthorAndTitle());
writeln('');

writeln('END TESTING ADAPTER PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}