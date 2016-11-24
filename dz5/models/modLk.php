<?php
use Intervention\Image\ImageManagerStatic as Image;
Image::configure(array('driver' => 'imagick'));
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

        $sql = 'SELECT `img_name` FROM `images` WHERE id = ?';
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->bind_result($userImage);
        $stmt->fetch();
        $stmt->close();

        $img = Image::make("uploads/$userName");

        include dirname(__DIR__) . '\views\lk.php';
    }
}