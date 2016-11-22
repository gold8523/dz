<?php
include dirname(__DIR__) . '\mainModel.php';

class modLogin extends oneCla {
    public $arrId;
    public $arrLogin;
    public $arrPass;
    public function selectLog1() {

        $con = $this->con1();
        $sql = 'SELECT `user_id` FROM `login` ';
        $result = $con->query($sql);
        $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($loginAll as $value) {
            foreach ($value as $item) {
                $this->arrId [] = $item;
            }
        }
    }

    public function selectLog2() {
        $con = $this->con1();
        $sql = 'SELECT `login` FROM `login` ';
        $result = $con->query($sql);
        $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($loginAll as $value) {
            foreach ($value as $item) {
                $this->arrLogin [] = $item;
            }
        }
    }

    public function selectLog3() {
        $con = $this->con1();
        $sql = 'SELECT `pass` FROM `login` ';
        $result = $con->query($sql);
        $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($loginAll as $value) {
            foreach ($value as $item) {
                $this->arrPass [] = $item;
            }
        }
    }
}

