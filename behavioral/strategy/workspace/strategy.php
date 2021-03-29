<?php

require_once ('../StrategyContext.php');
require_once ('../StrategyInterface.php');
require_once ('../StrategyCaps.php');
require_once ('../StrategyExclaim.php');
require_once ('../StrategyStars.php');
require_once ('../Book.php');

writeln('BEGIN TESTING STRATEGY PATTERN');
writeln('');

$book = new Book('PHP for Cats','Larry Truett');

$strategyContextC = new StrategyContext('C');
$strategyContextE = new StrategyContext('E');
$strategyContextS = new StrategyContext('S');

writeln('test 1 - show name context C');
writeln($strategyContextC->showBookTitle($book));
writeln('');

writeln('test 2 - show name context E');
writeln($strategyContextE->showBookTitle($book));
writeln('');

writeln('test 3 - show name context S');
writeln($strategyContextS->showBookTitle($book));
writeln('');

writeln('END TESTING STRATEGY PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}