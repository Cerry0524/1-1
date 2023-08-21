<?php
include_once "DB.php";

class Title extends DB{
    function __construct()
    {
        parent::__construct('title');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
            'header'=>"網站標題管理",
            'addBtn'=>"修改確定",
            'modal'=>"./api/add.php",
            'updateBtn'=>"更新圖片",
            'updateModal'=>"./view/modal/title.php",
        ];
        return $this->view("./view/backend/title.php",$view);
    }
}