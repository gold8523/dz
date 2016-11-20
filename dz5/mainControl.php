<?php
class controllers {
    public function control($name) {
        include dirname(__FILE__) . "/$name";
    }
}

