<?php
require dirname(__DIR__) . '/vendor/autoload.php';
$mail = new PHPMailer;
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

//    var_dump($_POST);
//    $mail->SMTPDebug = 3;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'senior.phpovich2016@yandex.ru';                 // SMTP username
        $mail->Password = '20pHp16';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;

        $mail->setFrom('site.ru');
        $mail->addAddress('senior.phpovich2016@yandex.ru', 'Петр');

        $mail->Subject = 'Новый пользователь';
        $mail->Body    = 'Зарегистрирован новый пользователь на сайте!';
        $mail->AltBody = 'Зарегистрирован новый пользователь на сайте!';

    header('Location: login.php');
}