<?php
require_once 'controller/BaseController.php';

class NewController extends BaseController 
{
    public function index (){
        $this->view('index');
    }

    public function error()
    {
        $this->view('error');
    }
}
