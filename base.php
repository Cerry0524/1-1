<?php 
session_start();
date_default_timezone_set("Asia/Taipei");

include_once __DIR__."/Controller/News.php";
include_once __DIR__."/Controller/Mvim.php";
include_once __DIR__."/Controller/Ad.php";
include_once __DIR__."/Controller/Title.php";
include_once __DIR__."/Controller/Admin.php";
include_once __DIR__."/Controller/Bottom.php";
include_once __DIR__."/Controller/Image.php";
include_once __DIR__."/Controller/Viewer.php";
include_once __DIR__."/Controller/Menu.php";


$News=new News;
$Mvim=new Mvim;
$Ad=new Ad;
$Title=new Title;
$Admin=new Admin;
$Bottom=new Bottom;
$Image=new Image;
$Viewer=new Viewer;
$Menu=new Menu;

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}