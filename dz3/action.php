<?php
$host = 'localhost';
$base = 'phpkurs';
$user = 'root';
$pass = '';

$connection = @new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$connection->query('SET NAMES "UTF-8"');
if (!empty($_POST) && $_POST['action'] == 'Зарегистрироваться') {
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

    if ($_FILES['picture']['type'] != "image/gif" && $_FILES['picture']['type'] != "image/jpeg"
        && $_FILES['picture']['type'] != "image/png") {
        echo  'Выберете изображение формата jpeg, png или gif.';
    } else {
        $uploads_dir = 'C:/OpenServer/domains/dz/dz3/photos';
        $tmp_name = $_FILES['picture']['tmp_name'];
        $name = strip_tags($_POST['login']) . '_' . $_FILES['picture']['name'];
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }

    $stmt = $connection->prepare($sqlImages);

    $imgName = $name;

    $stmt->bind_param('s', $imgName);
    $stmt->execute();

    header('Location: .');
    exit();
}

if (isset($_POST['action']) && $_POST['action'] == 'Переименовать') {

    $sqlImgEdit = 'UPDATE  `images` SET `img_name` = ? WHERE `img_id` = ?';
    $stmt = $connection->prepare($sqlImgEdit);

    $imgId = strip_tags($_POST['id']);
    $newName = strip_tags($_POST['edit']);

    $stmt->bind_param('si', $newName, $imgId);
    $stmt->execute();

    $oldName = $_POST['old'];
    $newName = $_POST['edit'];
    $dir = 'photos';
    $ren = rename("$dir/$oldName" , "$dir/$newName" );
    if ($ren == true) {
        echo 'Изображение успешно переименовано!';
    } else {
        echo 'Что-то пошло не так!';
    }

}

if (isset($_POST) && $_POST['action'] == 'Удалить') {

    $sqlImgEdit = 'DELETE  FROM `images` WHERE `img_id` = ?';
    $stmt = $connection->prepare($sqlImgEdit);

    $imgId = $_POST['id'];

    $stmt->bind_param('i', $imgId);
    $stmt->execute();

    $imgName = $_POST['edit'];
    $dir = 'photos';
    $del = unlink("$dir/$imgName");
    if ($del == true) {
        echo 'Изображение успешно удалено!';
    } else {
        echo 'Что-то пошло не так!';
    }

}