<?php
if (!empty($_POST) && $_POST['action'] == 'Зарегистрироваться') {


    if (!empty($_FILES['picture']['name'])) {
        if ($_FILES['picture']['type'] != "image/gif" && $_FILES['picture']['type'] != "image/jpeg"
            && $_FILES['picture']['type'] != "image/png") {
            echo  'Выберете изображение формата jpeg, png или gif.';
        } else {
            $dirUpload = dirname(__FILE__);
            $uploads_dir = $dirUpload. '\uploads';
            $tmp_name = $_FILES['picture']['tmp_name'];
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
        }
    }


//    header('Location: .');
    echo 'Вы успешно зарегистрированы!';
}
print_r($_FILES['picture']['name']);
if (!empty($_FILES)) {

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