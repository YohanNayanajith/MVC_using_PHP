<?php

class View_Table_Controller extends Controller{
    function __construct() {
        parent::__construct();
    }

    function index(){
        //echo "<br>Yohan Nayanajith-view controller";
        $this->view->users = $this->model->getData();
        $this->view->render('Index');
    }
}