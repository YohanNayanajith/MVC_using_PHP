<?php

class Database extends PDO{
    function __construct($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASSWORD){
        parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER,$DB_PASSWORD);
        
    }

    public function insertData($query){
        $stmt = $this->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function viewData($query){
        $stmt = $this->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}