<?php
include 'mainModel.php';

class modLogin extends oneCla {
    public function selectLog1() {
        $con = $this->con1();
        $sql = 'SELECT `user_id` FROM `login` ';
        $result = $con->query($sql);
        $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($loginAll as $value) {
            foreach ($value as $item) {
                $arrId [] = $item;
            }
        }
        return $arrId;
    }

    public function selectLog2() {
        $con = $this->con1();
        $sql = 'SELECT `login` FROM `login` ';
        $result = $con->query($sql);
        $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($loginAll as $value) {
            foreach ($value as $item) {
                $arrLogin [] = $item;
            }
        }
        return $arrLogin;
    }

    public function selectLog3() {
        $con = $this->con1();
        $sql = 'SELECT `pass` FROM `login` ';
        $result = $con->query($sql);
        $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($loginAll as $value) {
            foreach ($value as $item) {
                $arrPass [] = $item;
            }
        }
        return $arrPass;
    }
}

