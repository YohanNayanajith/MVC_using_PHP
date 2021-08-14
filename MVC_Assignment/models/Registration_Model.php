<?php

class Registration_Model extends Model{

    function __construct(){
        parent::__construct();
    }

    function regData(){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $pass = $_POST['password'];
        $query_sql = "INSERT INTO users(first_name,last_name,user_password) "; 
        $query_sql .= "VALUES('$first_name','$last_name','$pass')";
        return $this->db->insertData($query_sql);
    }
}

