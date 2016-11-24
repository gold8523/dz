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


//if (isset($_POST['action']) && $_POST['action'] == 'Переименовать') {
//
//    $sqlImgEdit = 'UPDATE  `images` SET `img_name` = ? WHERE `img_id` = ?';
//    $stmt = $connection->prepare($sqlImgEdit);
//
//    $imgId = strip_tags($_POST['id']);
//    $newName = strip_tags($_POST['edit']);
//
//    $stmt->bind_param('si', $newName, $imgId);
//    $stmt->execute();
//
//    $oldName = $_POST['old'];
//    $newName = $_POST['edit'];
//    $dir = 'photos';
//    $ren = rename("$dir/$oldName" , "$dir/$newName" );
//    if ($ren == true) {
//        echo 'Изображение успешно переименовано!';
//    } else {
//        echo 'Что-то пошло не так!';
//    }
//
//}
//
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