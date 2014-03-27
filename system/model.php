<?php

class Model {

    protected $db;
    public $_table;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=rask_mvc;', 'root', '123456ro');
    }

    public function insert(Array $data) {

        $fields = implode(", ", array_keys($data));
        $values = "'" . implode("',' ", array_values($data)) . "'";
        $this->db->query("INSERT INTO `{$this->_table}` ({$fields}) VALUES({$values})");
        return $this->db->lastInsertId();
    }

    public function read() {
       
    }

    public function update() {
        
    }

    public function delete() {
        
    }

    public function toJson() {
        
    }

    public function toXml() {
        
    }

}
