<?php

require('BaseController.php');

class User_ctrl extends BaseController {

    public function __construct() {
        $this->loadModel('users');
    }

    public function index() {
        $this->model->getAll();
    }
}