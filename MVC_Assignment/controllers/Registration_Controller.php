<?php

class Registration_Controller extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        // echo "Registration controller<br>";
        $this->view->render("Registration");
        if(isset($_POST['submit'])){
            $this->loadRegForm();
        }
    }

    function loadRegForm(){
        echo"Successfully Submitted";
        // echo "<br>Registration Form is created";
        $this->view->regUserData = $this->model->regData();
        // $this->view->render("Index");
    }
    
    
}