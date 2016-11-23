<?php
$connect = new model();
$reg = new modForm();

if (!empty($_POST) && $_POST['action'] == 'Зарегистрироваться') {

    $con = $connect->con1();

    $usernameCon = strip_tags($_POST['name']);
    $ageCon = strip_tags($_POST['age']);
    $infoCon = strip_tags($_POST['info']);
    $loginCon = strip_tags($_POST['login']);
    $passCon = strip_tags($_POST['pass']);
    $imgNameCon = strip_tags($_POST['login']) . '_' . $_FILES['picture']['name'];
    $user_idCon = $con->insert_id;


    $insReg = $reg->registrationUs($usernameCon, $ageCon, $infoCon, $infoCon, $passCon, $imgNameCon, $user_idCon);



//    $insReg = $reg->registrationLog($infoCon, $passCon);

    if (!empty($_FILES['picture']['name'])) {

//        $insReg = $reg->registrationImg($imgNameCon);

            if ($_FILES['picture']['type'] != "image/gif" && $_FILES['picture']['type'] != "image/jpeg"
                && $_FILES['picture']['type'] != "image/png") {
                echo  'Выберете изображение формата jpeg, png или gif.';
            } else {
                $dirUpload = dirname(__DIR__);
                $uploads_dir = $dirUpload . '\uploads';
                $tmp_name = $_FILES['picture']['tmp_name'];
                move_uploaded_file($tmp_name, "$uploads_dir/$imgNameCon");
            }
    }
    echo 'Вы успешно зарегистрированы!';
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