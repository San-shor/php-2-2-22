<?php

require_once 'vendor/autoload.php';
use App\classes\Word;

if(isset($_GET['pages']))
{
    if($_GET['pages']=='home')
    {
        include 'pages/home.php';
    }
    elseif (isset($_GET['pages'])){
        include 'pages/series.php';
    }
}
elseif (isset($_POST['btn']))
{
    $word=new Word($_POST);
    $result=$word->index();
//    print_r($result);
    extract($result);          //this method will convert
    include 'pages/home.php';
}
elseif (isset($_POST['seriesbtn'])){
    $word=new Word();
    $result=$word->series();
}