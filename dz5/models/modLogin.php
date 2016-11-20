<?php
include include dirname(__DIR__) . '\mainModel.php';

class modLogin extends model {
    public function selectLog() {
        $sql = 'SELECT `user_id` FROM `login` ';
        $result = $connection->query($sql);
        $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($loginAll as $value) {
            foreach ($value as $item) {
                $arrId [] = $item;
            }
        }
        $sql = 'SELECT `login` FROM `login` ';
        $result = $connection->query($sql);
        $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($loginAll as $value) {
            foreach ($value as $item) {
                $arrLogin [] = $item;
            }
        }
        $sql = 'SELECT `pass` FROM `login` ';
        $result = $connection->query($sql);
        $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($loginAll as $value) {
            foreach ($value as $item) {
                $arrPass [] = $item;
            }
        }
    }
}

