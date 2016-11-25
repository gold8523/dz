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

        $sql = 'SELECT `img_name`, `id` FROM `images` WHERE user_id = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $userImage = $result->fetch_all(MYSQLI_ASSOC);

        $images = [];
        foreach ($userImage as $value) {
            foreach ($value as $item) {
                $images [] = $item;
            }
        }

        $img = [];
        $id = [];
        $len = count($images);
        while ($len > -1) {
            if (!empty($images[$len])) {
                $gt = gettype($images[$len]);
                if ($gt == 'integer') {
                    $id [] = $images[$len];
                } else {
                    $img [] = $images[$len];
                }
            }
            $len--;
        }
        $i = 0;

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

    public function renameImg ($imgName, $img_id) {
        $con = $this->con1();

        $sqlImgEdit = 'UPDATE  `images` SET `img_name` = ? WHERE `id` = ?';
        $stmt = $con->prepare($sqlImgEdit);


        $newName = $imgName;
        $imgId = $img_id;

        $stmt->bind_param('si', $newName, $imgId);
        $stmt->execute();
    }

    public function deleteImg ($imageId) {
        $con = $this->con1();

        $sqlImgDel = 'DELETE  FROM `images` WHERE `id` = ?';
        $stmt = $con->prepare($sqlImgDel);

        $imgId = $imageId;

        $stmt->bind_param('i', $imgId);
        $stmt->execute();
    }
}