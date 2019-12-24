<?php
$controllers = array(
    'new' => ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy','error']
);
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) 
{
    $controller = 'new';
    $action = 'error';
}
include_once('controller/NewController.php');
$controllerObj = new NewController();
$controllerObj->$action();