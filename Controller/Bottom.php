<?php
include_once "DB.php";

class Bottom extends DB{
    function __construct()
    {
        parent::__construct('bottom');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
            'header'=>"網站標題管理",
            'addBtn'=>"修改確定",
            'modal'=>"./api/add.php",
            'updateBtn'=>"更新圖片",
            'updateModal'=>"./view/modal/bottom.php",
        ];
        return $this->view("./view/backend/bottom.php",$view);
    }
}