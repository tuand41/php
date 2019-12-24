<?php
require_once('DB.php');

if (isset($_GET['controller']))
{
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
    // $controller = 'new';
    // $action = 'index';
} 
else 
{
    $controller = 'new';
    $action = 'index';
}
require_once('routes.php');