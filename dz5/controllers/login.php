<?php
session_start();
require dirname(__DIR__) . '/vendor/autoload.php';
//require dirname(__DIR__) . '/controller.php';
require dirname(__DIR__) . '/models/model_login.php';

class login extends Controller
{


    public function action()
    {
        parent::action(); // TODO: Change the autogenerated stub
        $this->view->render('login_view.php', 'template_view.php');

        if (!empty($_COOKIE['auth'])) {
            $_SESSION['auth'] = true;
        }
        $isAuth = !empty($_SESSION['auth']);
        if ($isAuth) {
            header('Location: ../lk');
            exit();
        }
    }

    public function entry() {

            if (!empty($_POST['log'])) {

                $selLog = new Model_Login();
                $pass = $_POST['password'];
                $logAll = $selLog->login_pass($pass);

                if ($logAll[0]['login'] == strip_tags($_POST['log']) && $logAll[0]['pass'] == strip_tags($_POST['password'] && !empty($_POST['remem'])){

                    $_SESSION['auth'] = true;
                    $_SESSION['user_id'] = $logAll[0]['user_id'];
                    $_SESSION['login'] = $logAll[0]['login'];
                    $isAuth = $_SESSION['auth'];
                    setcookie('auth', '1', time() + 1800, '/');
                    header('HTTP/1.1 404 Not Found');
                    header('Location: ../lk');
                    exit();
                } else {
                    echo 'Неверный логин или пароль!';
                }

            } else {
                echo 'Введите логин и пароль!';
            }

//        $remoteIp = $_SERVER['REMOTE_ADDR'];
//        $gRecaptchaResponse = $_REQUEST['g-recaptcha-response'];
//        $secret = '6LfMIQ0UAAAAALN5yv0aY6kYwiNRZpI_yV75FCAB';
//
//        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
//        $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
//        if ($resp->isSuccess()) {
//            // verified!
//        } else {
//            $errors = $resp->getErrorCodes();
//        }
    }
}



