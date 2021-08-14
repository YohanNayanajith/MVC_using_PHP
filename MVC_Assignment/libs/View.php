<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Assignment</title>
</head>

<?php

class View{

    function __construct() {
        // $this->render_view('Index');
    }

    public function render($viewName) {
        require 'views/'.$viewName.'_View.php';
    }

    // public function render_view($viewName){
    //     $file =  'views/'.$viewName.'_View.php';
    //     if(file_exists($file)){
    //         require $file;
    //         //render($file);
    //     }
    // }

}