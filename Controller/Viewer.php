<?php
include_once "DB.php";

class Viewer extends DB{
    function __construct()
    {
        parent::__construct('viewer');
    }
    function backend(){
        $view=[
            'rows'=>$this->find(1)['viewer'],
            'header'=>"頁尾版權資料管理",
        ];
        return $this->view("./view/backend/viewer.php",$view);
    }
}