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
            'header'=>"網站標題管理",
            'addBtn'=>"修改確定",
            'modal'=>"./api/add.php",
            'updateBtn'=>"更新圖片",
            'updateModal'=>"./view/modal/admin.php",
        ];
        return $this->view("./view/backend/admin.php",$view);
    }
}