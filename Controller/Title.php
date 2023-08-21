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
            'addBtn'=>"新增網站標題圖片",
            'modal'=>"./view/modal/title.php",
            'updateBtn'=>"更新圖片",
            'updateModal'=>"./view/modal/updateTitle.php",
        ];
        return $this->view("./view/backend/title.php",$view);
    }
    function show(){
        return $this->find(['sh'=>1]);
    }
}