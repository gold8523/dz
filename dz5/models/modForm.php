<?php
//include dirname(__DIR__) . '\mainModel.php';

class modForm extends model {
    public function registrationUs($usernameCon, $ageCon, $infoCon, $loginCon, $passCon, $imgNameCon) {

        $sqlUsers = 'insert into `users` (`username`, `age`, `info`) value (?, ?, ?)';
        $sqlLogin = 'insert into `login` (`login`, `pass`, `user_id`) value (?, ?, ?)';
        $sqlImages = 'insert into `images` (`img_name`, `user_id`) value (?, ?)';

        $con = $this->con1();

        $stmt = $con->prepare($sqlUsers);

        $username = $usernameCon;
        $age = $ageCon;
        $info = $infoCon;
        $login = $loginCon;
        $pass = $passCon;
        $imgName = $imgNameCon;
//        $user_id;

        $stmt->bind_param('sis', $username, $age, $info);
        $stmt->execute();


        $stmt = $con->prepare($sqlLogin);

        $stmt->bind_param('ssi', $login, $pass, $user_id);
        $stmt->execute();


        $stmt = $con->prepare($sqlImages);

        $stmt->bind_param('si', $imgName, $user_id);
        $stmt->execute();

        print_r($con->insert_id);
    }

}