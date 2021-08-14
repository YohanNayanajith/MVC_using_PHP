<?php

class Search_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function searchData(){
        $name = $_POST['search'];
        // print_r($name);
        return $this->db->insertData("SELECT * FROM users WHERE first_name = '$name'");
    }
}