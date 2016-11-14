<?php
require_once '../Faker/src/autoload.php';
$faker = Faker\Factory::create();

$host = 'localhost';
$base = 'phpkurs';
$user = 'root';
$pass = '';

$connection = @new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$connection->query('SET NAMES "UTF-8"');

$sql = "
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `age` int(3),
  `info` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);

$sql = "
CREATE TABLE `login` (
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);

$sql = "
CREATE TABLE `images` (
  `img_name` varchar(100) NOT NULL,
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (img_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);

//$sqlUsers = 'insert into `users` (`username`, `age`, `info`) value (?, ?, ?)';
//$sqlLogin = 'insert into `login` (`login`, `pass`) value (?, ?)';

//for ($i = 0; $i < 10; $i++ ) {
//    $stmt = $connection->prepare($sqlUsers);
//
//    $username = $faker->firstName();
//    $age = $faker->randomDigitNotNull;
//    $info = $faker->text($maxNbChars = 200);
//
//    $stmt->bind_param('sis', $username, $age, $info);
//    $stmt->execute();
//
//    $stmt = $connection->prepare($sqlLogin);
//
//    $login = $faker->userName;
//    $pass = $faker->password(8);
//
//    $stmt->bind_param('ss', $login, $pass);
//    $stmt->execute();
//
//    $imgName = $faker->image($dir = '../dz3/photos', $width = 640, $height = 480);
//
//}
//$connection->query('truncate table `users`');
//$connection->query('truncate table `login`');

print_r($_POST);
if (isset($_POST['action']) && $_POST['action'] == 'Переименовать') {

    $sqlImgEdit = 'UPDATE  `images` SET `img_name` = ? WHERE `img_id` = ?';
    $stmt = $connection->prepare($sqlImgEdit);

    $imgId = strip_tags($_POST['id']);
    $newName = strip_tags($_POST['edit']);

    $stmt->bind_param('si', $newName, $imgId);
    $stmt->execute();

//    $oldname = $_POST['id'];
//    $newname = $_POST['edit'];
//    $ren = rename("$oldname" , "$newname" );
//    if ($ren == true) {
//        echo 'Изображение успешно !';
//    } else {
//        echo 'Что-то пошло не так!';
//    }

}

if (isset($_POST) && $_POST['action'] == 'Удалить') {

    $sqlImgEdit = 'DELETE  FROM `images` WHERE `img_id` = ?';
    $stmt = $connection->prepare($sqlImgEdit);

    $imgId = $_POST['id'];
    print_r($imgName);

    $stmt->bind_param('s', $imgId);
    $stmt->execute();

    $imgName =
    $dir = 'photos';
    $del = unlink("$dir/$imgName");
    if ($del == true) {
        echo 'Изображение успешно удалено!';
    } else {
        echo 'Что-то пошло не так!';
    }

}