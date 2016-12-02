<?php
ini_set('display_errors', 1);
require 'core/route.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/model.php';
require_once 'vendor/autoload.php';
$start = new Route();
$start->start();
