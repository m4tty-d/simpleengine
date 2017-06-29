<?php

class BaseModel {

    private $db = null;
    private $db_tablename = null;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function setTableName($db_tablename) {
        $this->db_tablename = $db_tablename;
    }

    public function getById($id) {
        return $this->db->query("select * from $this->db_tablename where id = $id")->fetch();
    }

    public function getAll() {
        return $this->db->query("select * from $this->db_tablename")->fetchAll();
    }

}