<?php

class BridgeBookTitleAuthor extends BridgeBook {
    function showTitleAuthor() {
        return $this->showTitle() . ' by ' . $this->showAuthor();
    }
}
