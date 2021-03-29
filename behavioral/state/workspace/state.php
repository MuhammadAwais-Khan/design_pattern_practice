<?php

require_once ('../BookContext.php');
require_once ('../BookTitleStateInterface.php');
require_once ('../BookTitleStateExclaim.php');
require_once ('../BookTitleStateStars.php');
require_once ('../Book.php');

writeln('BEGIN TESTING STATE PATTERN');
writeln('');

$book = new Book('PHP for Cats','Larry Truett');;
$context = new bookContext($book);

writeln('test 1 - show name');
writeln($context->getBookTitle());
writeln('');

writeln('test 2 - show name');
writeln($context->getBookTitle());
writeln('');

writeln('test 3 - show name');
writeln($context->getBookTitle());
writeln('');

writeln('test 4 - show name');
writeln($context->getBookTitle());
writeln('');

writeln('END TESTING STATE PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}