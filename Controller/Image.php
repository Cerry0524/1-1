<?php
include_once "DB.php";

class Image extends DB{
    function __construct()
    {
        parent::__construct('image');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
            'header'=>"校園映像資料管理",
            'addBtn'=>"新增校園映像圖片",
            'modal'=>"./view/modal/image.php",
            'updateBtn'=>"更換圖片",
            'updateModal'=>"./view/modal/upateImage.php",
        ];
        return $this->view("./view/backend/image.php",$view);
    }
}