<?php
include_once "DB.php";

class Bottom extends DB{
    function __construct()
    {
        parent::__construct('bottom');
    }
    function backend(){
        $view=[
            'rows'=>$this->find(1)['bottom'],
            'header'=>"頁尾版權資料管理",
    
        ];
        return $this->view("./view/backend/bottom.php",$view);
    }
}