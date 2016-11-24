<?php
$reg = new modForm();

if (!empty($_POST) && $_POST['action'] == 'Зарегистрироваться') {

    $usernameCon = strip_tags($_POST['name']);
    $ageCon = strip_tags($_POST['age']);
    $infoCon = strip_tags($_POST['information']);
    $loginCon = strip_tags($_POST['loginUser']);
    $passCon = strip_tags($_POST['pass']);
    $imgNameCon = strip_tags($_POST['loginUser']) . '_' . $_FILES['picture']['name'];


    $insReg = $reg->registrationUs($usernameCon, $ageCon, $infoCon, $loginCon, $passCon, $imgNameCon);


    if (!empty($_FILES['picture']['name'])) {

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
    header('Location: login.php');
}