<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=kursphp', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf-8"');

}
catch (PDOException $e) {
    echo 'error';
    exit();
}
$sql = "
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `age` int(3),
  PRIMARY KEY (`id`)
) ";
$pdo->query($sql);