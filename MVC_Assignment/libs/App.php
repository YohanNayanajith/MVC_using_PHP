<?php

class App{

    private $_url = null;
    private $_controller = null;
    function __construct()
    {
        $this->_getURL();
        // print_r($this->_url);
        if(empty($this->_url[0])){
            $this->_defaultLoadController();
            return false;
        }
        // }else{
        //     echo "App method Called, URL is empty!";
        // }
        $this->_loadController();
    }

    private function _getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null; 
        $url = rtrim($url, '/'); 
        $url = filter_var($url, FILTER_SANITIZE_URL); 
        $this->_url = explode('/', $url); 
    }

    private function _defaultLoadController(){
        require 'controllers/View_Table_Controller.php';
        $this->_controller = new View_Table_Controller();
        $this->_controller->Load_Model('Index');
        $this->_controller->index();
    }

    // private function _defaultLoadController(){
    //     $file = 'controllers/'.$this->_url[0].'_Controller.php';
    //     if(file_exists($file)){
    //         require $file;
    //         $className = $this->_url[0].'_Controller';
    //         $this->_controller = new $className;
    //         $this->_controller->index();
    //         echo "<br>Table controller has been called";
    //         // $this->_controller->Load_Model();
    //     }else{
    //         echo "Controller file is not found!";
    //     }
    // }

    private function _loadController(){
        $file = 'controllers/'.$this->_url[0].'_Controller.php';
        if (file_exists($file)) {
            require $file;
            $className = $this->_url[0].'_Controller';
            $this->_controller = new $className;
            $this->_controller->Load_Model($this->_url[0]);
            $this->_controller->index();
            return true;
        } else {
            echo "Sorry, page is not found";
            return false;
        }
    }
}