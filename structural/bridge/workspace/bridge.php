<?php
require_once ('../BridgeBook.php');
require_once ('../BridgeBookAuthorTitle.php');
require_once ('../BridgeBookTitleAuthor.php');
require_once ('../BridgeBookImp.php');
require_once ('../BridgeBookCapsImp.php');
require_once ('../BridgeBookStarsImp.php');

writeln('BEGIN TESTING BRIDGE PATTERN');
writeln('');

writeln('test 1 - author title with caps');
$book = new BridgeBookAuthorTitle('Larry Truett','PHP for Cats','CAPS');
writeln($book->showAuthorTitle());
writeln('');

writeln('test 2 - author title with stars');
$book = new BridgeBookAuthorTitle('Larry Truett','PHP for Cats','STARS');
writeln($book->showAuthorTitle());
writeln('');

writeln('test 3 - title author with caps');
$book = new BridgeBookTitleAuthor('Larry Truett','PHP for Cats','CAPS');
writeln($book->showTitleAuthor());
writeln('');

writeln('test 4 - title author with stars');
$book = new BridgeBookTitleAuthor('Larry Truett','PHP for Cats','STARS');
writeln($book->showTitleAuthor());
writeln('');

writeln('END TESTING BRIDGE PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}