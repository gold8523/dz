<?php
require dirname(__DIR__) . '/controller.php';

$control = new Controller();
$content_view = 'main_view.php';
$name = 'template_view.php';
$control->render($content_view, $name);
