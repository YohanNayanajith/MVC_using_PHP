<?php

class Search_Controller extends Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        //echo "<br>Table controller called";
        //not needed to call serachData function below.
        // $this->view->searchUserData = $this->model->searchData();
        $this->view->render("Search");
        if(isset($_POST['search'])){
            $this->loadForm();
        }
    }

    function loadForm(){
        // if(isset($_POST[]))
        echo "Search result : ".$_POST['search'];
        // echo "<br>Form is created";
        $this->view->searchUserData = $this->model->searchData();
        $this->view->render("SearchData");
    }
}