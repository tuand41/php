<?php
$controllers = array(
  'new' => ['home','edit', 'delete', 'add','error']
);
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'new';
  $action = 'error';
}

include_once('controllers/' . $controller . '_controller.php');

$nameClassController = ucwords($controller). 'Controller';
$controller = new $nameClassController;
$controller->$action();