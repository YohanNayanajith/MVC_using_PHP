<?php

class Controller
{
    function __construct()
    {
        $this->view = new View();
        // echo "<br>Main Controller class called";
    }

    function Load_Model($modelName){
        $path = 'models/'.$modelName.'_Model.php';
        if(file_exists($path)){
            require $path;
            $className = $modelName.'_Model';
            $this->model = new $className();
            // echo "<br>Main Controller class called-LOAD MODEL";
        }
    }

    // function Load_View(){
    //     $path = 'views/Index_View.php';
    //     if(file_exists($path)){
    //         require '$path';
    //         // $className = new Index_View();
    //     }
    // }
}
