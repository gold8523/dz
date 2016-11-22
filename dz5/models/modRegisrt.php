<?php
include dirname(__DIR__) . '\mainModel.php';

class modRegistr extends model {
    public function registration {
        $sqlUsers = 'insert into `users` (`username`, `age`, `info`) value (?, ?, ?)';
        $sqlLogin = 'insert into `login` (`login`, `pass`) value (?, ?)';
        $sqlImages = 'insert into `images` (`img_name`) value (?)';

        $stmt = $connection->prepare($sqlUsers);

        $username = strip_tags($_POST['name']);
        $age = strip_tags($_POST['age']);
        $info = strip_tags($_POST['info']);

        $stmt->bind_param('sis', $username, $age, $info);
        $stmt->execute();

        $stmt = $connection->prepare($sqlLogin);

        $login = strip_tags($_POST['login']);
        $pass = strip_tags($_POST['pass']);

        $stmt->bind_param('ss', $login, $pass);
        $stmt->execute();

        $stmt = $connection->prepare($sqlImages);

        $name = strip_tags($_POST['login']) . '_' . $_FILES['picture']['name'];
        $imgName = $name;

        $stmt->bind_param('s', $imgName);
        $stmt->execute();
    }
}