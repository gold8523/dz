<?php
class model
{
    public function __construct()
    {
        $config = parse_ini_file('config.ini');
        $host = $config['host'];
        $user = $config['base'];
        $pass = $config['user'];
        $base = $config['pass'];
        $connection = @new mysqli($host, $user, $pass, $base);
        if (mysqli_connect_errno()) {
            die(mysqli_connect_error());
        }
        $connection->query('SET NAMES "UTF-8"');
    }
}