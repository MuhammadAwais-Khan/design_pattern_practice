<?php

class BridgeBookCapsImp extends BridgeBookImp {
    function showAuthor($author_in) {
        return strtoupper($author_in);
    }
    function showTitle($title_in) {
        return strtoupper($title_in);
    }
}