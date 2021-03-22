<?php

require_once('../AbstractBookFactory.php');
require_once('../AbstractBook.php');
require_once ('../AbstractMySQLBook.php');
require_once ('../AbstractPHPBook.php');
require_once ('../OReillyBookFactory.php');
require_once ('../OReillyMySQLBook.php');
require_once ('../OReillyPHPBook.php');
require_once ('../SamsBookFactory.php');
require_once ('../SamsMySQLBook.php');
require_once ('../SamsPHPBook.php');

/**
 * Initialization
 */

writeln('BEGIN TESTING ABSTRACT FACTORY PATTERN');
writeln('');

writeln('testing OReillyBookFactory');

//creat an object
$bookFactoryInstance = new OReillyBookFactory();

// send class object into function
testConcreteFactory($bookFactoryInstance);
writeln('');

writeln('testing SamsBookFactory');
$bookFactoryInstance = new SamsBookFactory;
testConcreteFactory($bookFactoryInstance);

writeln("END TESTING ABSTRACT FACTORY PATTERN");
writeln('');

function testConcreteFactory($bookFactoryInstance)
{
    $phpBookOne = $bookFactoryInstance->makePHPBook();
    writeln('first php Author: '.$phpBookOne->getAuthor());
    writeln('first php Title: '.$phpBookOne->getTitle());

    $phpBookTwo = $bookFactoryInstance->makePHPBook();
    writeln('second php Author: '.$phpBookTwo->getAuthor());
    writeln('second php Title: '.$phpBookTwo->getTitle());

    $mySqlBook = $bookFactoryInstance->makeMySQLBook();
    writeln('MySQL Author: '.$mySqlBook->getAuthor());
    writeln('MySQL Title: '.$mySqlBook->getTitle());
}

function writeln($line_in) {
    echo $line_in."<br/>";
}
?>