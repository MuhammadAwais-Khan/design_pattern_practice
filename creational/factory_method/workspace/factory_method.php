<?php

require_once ('../Automobile.php');
require_once ('../AutomobileFactory.php');

writeln('BEGIN TESTING FACTORY METHOD PATTERN');

// have the factory create the Automobile object
$AFObj = AutomobileFactory::create('Suzuki', 'Swift');

    echo $var= writeln($AFObj->getMakeAndModel());

writeln('END TESTING FACTORY METHOD PATTERN');
function writeln($line_in) {
    echo $line_in."<br/>";
}