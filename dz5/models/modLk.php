<?php
use Intervention\Image\ImageManager;

require dirname(__DIR__) . '/vendor/autoload.php';

class modLk extends model {

    public function selectUser($userId)
    {
        $manager = new ImageManager(array('driver' => 'imagick'));

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

        $sql = 'SELECT `img_name` FROM `images` WHERE id = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->bind_result($userImage);
        $stmt->fetch();
        $stmt->close();

//        $manager =;
        $img = $manager->make("uploads/$userName");
        echo $img;

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
}