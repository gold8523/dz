<?php
$host = 'localhost';
$base = 'phpkurs';
$user = 'root';
$pass = '';

$connection = @new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$connection->query('SET NAMES "UTF-8"');

$sql = "
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `age` int(3),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);

$sql = "
CREATE TABLE `login` (
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);

$sqlusers = 'inser into `users` (`username`, `age`, )';