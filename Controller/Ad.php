<?php
include_once "DB.php";

class Ad extends DB{
    function __construct()
    {
        parent::__construct('ad');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
            'header'=>"動態文字廣告管理",
            'addBtn'=>"新增動態文字廣告",
            'modal'=>"./view/modal/ad.php",
        ];
        return $this->view("./view/backend/ad.php",$view);
    }
}