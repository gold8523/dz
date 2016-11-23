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
        $user_id = $con->insert_id;

        $stmt->bind_param('sis', $username, $age, $info);
        $stmt->execute();


        $stmt = $con->prepare($sqlLogin);

        $login = $loginCon;
        $pass = $passCon;

        $stmt->bind_param('ssi', $login, $pass, $user_id);
        $stmt->execute();


        $stmt = $con->prepare($sqlImages);

        $imgName = $imgNameCon;

        $stmt->bind_param('si', $imgName, $user_id);
        $stmt->execute();

        echo $user_id = $con->insert_id;
    }

//    public function registrationLog() {
//
//    }
//
//    public function registrationImg() {
//
//    }
}