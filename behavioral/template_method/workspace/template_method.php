<?php

require_once ('../TemplateAbstract.php');
require_once ('../TemplateExclaim.php');
require_once ('../TemplateStars.php');
require_once ('../Book.php');

writeln('BEGIN TESTING TEMPLATE PATTERN');
writeln('');

$book = new Book('PHP for Cats','Larry Truett');
$exclaimTemplate = new TemplateExclaim();
$starsTemplate = new TemplateStars();

writeln('test 1 - show exclaim template');
writeln($exclaimTemplate->showBookTitleInfo($book));
writeln('');

writeln('test 2 - show stars template');
writeln($starsTemplate->showBookTitleInfo($book));
writeln('');

writeln('END TESTING TEMPLATE PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}