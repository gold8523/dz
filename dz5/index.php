<?php
ini_set('display_errors', 1);
require 'route.php';
require_once 'view.php';
require_once 'controller.php';
//require 'model.php';
$start = new Route();
$start->start();
