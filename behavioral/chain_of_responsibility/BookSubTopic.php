<?php

class BookSubTopic extends AbstractBookTopic {
    private $topic;
    private $parentTopic;
    private $title;
    function __construct($topic_in, BookTopic $parentTopic_in) {
        $this->topic = $topic_in;
        $this->parentTopic = $parentTopic_in;
        $this->title = NULL;
    }
    function getTopic() {
        return $this->topic;
    }
    function getParentTopic() {
        return $this->parentTopic;
    }
    function getTitle() {
        if (NULL != $this->title) {
            return $this->title;
        } else {
            return $this->parentTopic->getTitle();
        }
    }
    function setTitle($title_in) {$this->title = $title_in;}
}