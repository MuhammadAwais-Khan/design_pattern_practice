<?php

abstract class BookColleague {
    private $mediator;
    function __construct($mediator_in) {
        $this->mediator = $mediator_in;
    }
    function getMediator() {return $this->mediator;}
    function changed($changingClassIn) {
        getMediator()->titleChanged($changingClassIn);
    }
}