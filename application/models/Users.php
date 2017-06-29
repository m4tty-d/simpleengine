<?php

require('BaseModel.php');

class Users extends BaseModel {

    public function __construct() {
        parent::__construct();
        $this->setTableName("users");
    }

}