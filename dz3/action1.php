<?php
if (empty($_POST) and $_POST['action'] == 'Войти') {
//    $sql = 'SELECT * FROM `login`';
//    $result = $connection->query($sql);
//    $loginAll = $result->fetch_all(MYSQLI_ASSOC);
    echo '<pre>' . print_r($_POST, true). '</pre>';
}