<?php

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