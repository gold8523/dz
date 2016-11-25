<?php
session_start();
$selUser = new modLk();

if (!empty($_COOKIE['auth'])) {
    $_SESSION['auth'] = true;
}

$isAuth = !empty($_SESSION['auth']);

if ($isAuth) {
    $userId = $_SESSION['user_id'];
    $sel = $selUser->selectUser($userId);

} else {
    header("Location: login.php");
    exit();
}

//if (isset($_POST) && $_POST['action'] == 'Удалить') {
//
//    $sqlImgEdit = 'DELETE  FROM `images` WHERE `img_id` = ?';
//    $stmt = $connection->prepare($sqlImgEdit);
//
//    $imgId = $_POST['id'];
//
//    $stmt->bind_param('i', $imgId);
//    $stmt->execute();
//
//    $imgName = $_POST['edit'];
//    $dir = 'photos';
//    $del = unlink("$dir/$imgName");
//    if ($del == true) {
//        echo 'Изображение успешно удалено!';
//    } else {
//        echo 'Что-то пошло не так!';
//    }
//
//}