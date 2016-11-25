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
        header('Location: lk.php');
    } else {
        echo 'Что-то пошло не так!';
    }

}
if (isset($_POST) && $_POST['action'] == 'Удалить') {

    $imageId = $_POST['id'];

    $ren = $selUser->deleteImg($imageId);

    $imgName = $_POST['edit'];
    $dir = dirname(__DIR__) . '/uploads';
    $del = unlink("$dir/$imgName");
    if ($del == true) {
        header('Location: lk.php');
    } else {
        echo 'Что-то пошло не так!';
    }

}