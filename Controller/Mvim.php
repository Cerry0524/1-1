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
            'header'=>"動畫圖片管理",
            'addBtn'=>"新增動畫圖片",
            'modal'=>"./view/modal/mvim.php",
            'updateBtn'=>"更新動畫",
            'updateModal'=>"./view/modal/updateMvim.php",
        ];
        return $this->view("./view/backend/mvim.php",$view);
    }
}