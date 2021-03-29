<?php

require_once ('../BookReader.php');
require_once ('../BookMark.php');
// Client

writeln('BEGIN TESTING MEMENTO PATTERN');
writeln('');

$bookReader = new BookReader('Core PHP Programming, Third Edition','103');
$bookMark = new BookMark($bookReader);

writeln('(at beginning) bookReader title: '.$bookReader->getTitle());
writeln('(at beginning) bookReader page: '.$bookReader->getPage());

$bookReader->setPage("104");
$bookMark->setPage($bookReader);
writeln('(one page later) bookReader page: '.$bookReader->getPage());

$bookReader->setPage('2005');  //oops! a typo
writeln('(after typo) bookReader page: '.$bookReader->getPage());

$bookMark->getPage($bookReader);
writeln('(back to one page later) bookReader page: '.$bookReader->getPage());
writeln('');

writeln('END TESTING MEMENTO PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}