<?php
include_once "DB.php";

class Mvim extends DB{
    function __construct()
    {
        parent::__construct('mvim');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
            'header'=>"網站標題管理",
            'addBtn'=>"修改確定",
            'modal'=>"./api/add.php",
            'updateBtn'=>"更新圖片",
            'updateModal'=>"./view/modal/mvim.php",
        ];
        return $this->view("./view/backend/mvim.php",$view);
    }
}