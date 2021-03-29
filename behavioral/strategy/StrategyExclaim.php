<?php

class StrategyExclaim implements StrategyInterface {
    public function showTitle($book_in) {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return Str_replace(' ','!',$title);
    }
}