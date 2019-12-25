<?php
require_once('DB.php');

if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'home';
  }
} else {
  $controller = 'new';
  $action = 'home';
}
require_once('routes.php');