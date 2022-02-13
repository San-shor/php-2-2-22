<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;

if(isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] )
    {
        include 'pages/odd-even.php';
    }
}
elseif (isset($_POST['btn'])){
    $calculator=new Calculator($_POST);
    $res=$calculator->index();
    include 'pages/home.php';
}