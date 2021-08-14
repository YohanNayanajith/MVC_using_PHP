<?php

class Index_Model extends Model{

    function __construct(){
        parent::__construct();
    }

    public function getData(){
        return $this->db->insertData("SELECT * FROM users");
    }
}