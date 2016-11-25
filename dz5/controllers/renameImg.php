<?php
session_start();
$selUser = new modLk();
$userId = $_SESSION['user_id'];
$sel = $selUser->selectUser($userId);

if (isset($_POST['action']) && $_POST['action'] == 'Переименовать') {



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