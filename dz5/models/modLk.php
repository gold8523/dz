<?php

class modLk extends model {

    public function selectUser($userId)
    {

        $con = $this->con1();
        $user_id = $userId;

        $sql = 'SELECT `username` FROM `users` WHERE id = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->bind_result($userName);
        $stmt->fetch();
        $stmt->close();

        $sql = 'SELECT `age` FROM `users` WHERE id = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->bind_result($userAge);
        $stmt->fetch();
        $stmt->close();

        $sql = 'SELECT `info` FROM `users` WHERE id = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->bind_result($userInfo);
        $stmt->fetch();
        $stmt->close();

        $sql = 'SELECT `img_name` FROM `images` WHERE user_id = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $userImage = $result->fetch_all(MYSQLI_ASSOC);
        print_r($user_id);
        print_r($userImage);


        $sql = 'SELECT `username`, `age` FROM `users`';
        $result = $con->query($sql);
        $usersAge = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($usersAge as $value) {
            foreach ($value as $item) {
                $arrAge [] = $item;
            }
        }
        $ageUsers = [];
        $len = count($arrAge);
        while ($len > 0) {
            if (($arrAge[$len - 1]) > 18) {
                $ageUsers [] = $arrAge[$len - 2] . ' ' . $arrAge[$len - 1] . '- совершеннолетний';
            } else {
                $ageUsers [] = $arrAge[$len - 2] . ' ' . $arrAge[$len - 1] . '- не совершеннолетний';
            }
            $len = $len-2;
        }

        include dirname(__DIR__) . '\views\lk.php';
    }

    public function addImg($imgNameCon, $userId) {
        $sqlImages = 'insert into `images` (`img_name`, `user_id`) value (?, ?)';

        $con = $this->con1();

        $stmt = $con->prepare($sqlImages);

        $imgName = $imgNameCon;
        $user_id = $userId;

        $stmt->bind_param('si', $imgName, $user_id);
        $stmt->execute();
    }

//    public function renameImg ($, $) {
//        $sqlImgEdit = 'UPDATE  `images` SET `img_name` = ? WHERE `img_id` = ?';
//        $stmt = $connection->prepare($sqlImgEdit);
//
//        $imgId = strip_tags($_POST['id']);
//        $newName = strip_tags($_POST['edit']);
//
//        $stmt->bind_param('si', $newName, $imgId);
//        $stmt->execute();
//    }
}