<?php
include dirname(__DIR__) . '\mainModel.php';

class modRegistr extends model {
    public function registrationUs($usernameCon, $ageCon, $infoCon) {
        $sqlUsers = 'insert into `users` (`username`, `age`, `info`) value (?, ?, ?)';

        $con = $this->con1();
        $stmt = $con->prepare($sqlUsers);

        $username = $usernameCon;
        $age = $ageCon;
        $info = $infoCon;

        $stmt->bind_param('sis', $username, $age, $info);
        $stmt->execute();
    }

    public function registrationLog($loginCon, $passCon) {
        $sqlLogin = 'insert into `login` (`login`, `pass`, `user_id`) value (?, ?, ?)';

        $con = $this->con1();
        $stmt = $con->prepare($sqlLogin);

        $user_id = $con->insert_id;
        $login = $loginCon;
        $pass = $passCon;

        $stmt->bind_param('ssi', $login, $pass, $user_id);
        $stmt->execute();
    }

    public function registrationImg($imgNameCon) {
        $sqlImages = 'insert into `images` (`img_name`, `user_id`) value (?, ?)';

        $con = $this->con1();
        $stmt = $con->prepare($sqlImages);

        $user_id = $con->insert_id;
        $imgName = $imgNameCon;

        $stmt->bind_param('si', $imgName, $user_id);
        $stmt->execute();
    }
}