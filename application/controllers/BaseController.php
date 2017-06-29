<?php

class BaseController {

    public $model = null;

    public function __construct() {

    }

    public function model_loader($model_name) {

        require("../models/" . ucfirst($model_name) . ".php");

    }

    public function loadModel($model_name) {
        spl_autoload_register('model_loader');
        $this->model = new $model_name();
    }

}