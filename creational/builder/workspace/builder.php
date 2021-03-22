<?php

class HTMLPageBuilder extends AbstractPageBuilder {
    private $page = NULL;
    function __construct() {
        $this->page = new HTMLPage();
    }
    function setTitle($title_in) {
        $this->page->setTitle($title_in);
    }
    function setHeading($heading_in) {
        $this->page->setHeading($heading_in);
    }
    function setText($text_in) {
        $this->page->setText($text_in);
    }
    function formatPage() {
        $this->page->formatPage();
    }
    function getPage() {
        return $this->page;
    }
}


class HTMLPageDirector extends AbstractPageDirector {
    private $builder = NULL;
    public function __construct(AbstractPageBuilder $builder_in) {
        $this->builder = $builder_in;
    }
    public function buildPage() {
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('Testing1, testing1, testing! </br>');
        $this->builder->setText('Testing2, testing2, testing2, or! </br>');
        $this->builder->setText('Testing3, testing3, testing3 more!');
        $this->builder->formatPage();
    }
    public function getPage() {
        return $this->builder->getPage();
    }
}

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();
$page = $pageDirector->getPage();
writeln($page->showPage());
writeln('');

writeln('END TESTING BUILDER PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}

?>