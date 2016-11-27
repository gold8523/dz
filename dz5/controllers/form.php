<?php
require dirname(__DIR__) . '/vendor/autoload.php';
$mail = new PHPMailer;
$reg = new modForm();
require dirname(__DIR__) . '/vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

if (!empty($_POST) && $_POST['action'] == 'Зарегистрироваться') {

    $usernameCon = strip_tags($_POST['name']);
    $ageCon = strip_tags($_POST['age']);
    $infoCon = strip_tags($_POST['information']);
    $loginCon = strip_tags($_POST['loginUser']);
    $passCon = strip_tags($_POST['pass']);
    $imgNameCon = strip_tags($_POST['loginUser']) . '_' . $_FILES['picture']['name'];


    $mail->SMTPDebug = 3;
    $address = 'champ2013@yandex.ru';
    $sub = 'Новый пользователь';
    $body = 'Зарегистрирован новый пользователь на сайте!';
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'senior.phpovich2016@yandex.ru';                 // SMTP username
    $mail->Password = '20pHp16';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;

    $mail->setFrom('senior.phpovich2016@yandex.ru');
    $mail->addAddress($address, 'Петр');

    $mail->Subject = $sub;
    $mail->Body    = $body;
    $mail->AltBody = $body;


    $insReg = $reg->registrationUs($usernameCon, $ageCon, $infoCon, $loginCon, $passCon, $imgNameCon);


    if (!empty($_FILES['picture']['name'])) {

        if ($_FILES['picture']['type'] != "image/gif" && $_FILES['picture']['type'] != "image/jpeg"
            && $_FILES['picture']['type'] != "image/png"
        ) {
            echo 'Выберете изображение формата jpeg, png или gif.';
        } else {
            $dirUpload = dirname(__DIR__);
            $uploads_dir = $dirUpload . '\uploads';
            $tmp_name = $_FILES['picture']['tmp_name'];
            move_uploaded_file($tmp_name, "$uploads_dir/$imgNameCon");
        }


        $image = Image::make("uploads/$imgNameCon")
            ->resize(300, 200)
            ->save("images/$imgNameCon", 100);

    }
    header('Location: login.html');
}