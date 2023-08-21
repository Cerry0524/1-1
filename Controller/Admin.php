<?php
include_once "DB.php";

class Admin extends DB{
    function __construct()
    {
        parent::__construct('admin');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
            'header'=>"管理者帳號管理",
            'addBtn'=>"新增管理者帳號",
            'modal'=>"./view/modal/admin.php",
        ];
        return $this->view("./view/backend/admin.php",$view);
    }
}