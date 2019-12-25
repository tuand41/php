<?php
class BaseController
{
    function render($file, $data = array())
    {
        $view_file = 'views/'. $file . '.php';
        if (is_file($view_file)) {
            extract($data);
            require_once($view_file);
        } 
        else 
        {
            header('Location: index.php?controller=pages&action=error');
        }
    }
}