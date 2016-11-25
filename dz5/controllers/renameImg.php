<?php
session_start();
$selUser = new modLk();
$userId = $_SESSION['user_id'];
$sel = $selUser->selectUser($userId);

if (isset($_POST['action']) && $_POST['action'] == 'Переименовать') {

    $img_id = $_POST['id'];
    $imgName = strip_tags($_POST['edit']);

    $ren = $selUser->renameImg($imgName, $img_id);

    $oldName = $_POST['old'];
    $newName = $_POST['edit'];
    $dir = dirname(__DIR__) . '/uploads';
    $ren = rename("$dir/$oldName" , "$dir/$newName" );
    if ($ren == true) {
        echo 'Изображение успешно переименовано!';
    } else {
        echo 'Что-то пошло не так!';
    }

}
if (isset($_POST) && $_POST['action'] == 'Удалить') {

    $img_id = $_POST['id'];

    $ren = $selUser->deleteImg($img_id);

    $imgName = $_POST['old'];
    $dir = dirname(__DIR__) . '/uploads';
    $del = unlink("$dir/$imgName");
    if ($del == true) {
        echo 'Изображение успешно удалено!';
    } else {
        echo 'Что-то пошло не так!';
    }

}