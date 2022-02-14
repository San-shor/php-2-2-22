<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;
use App\classes\OddEven;
use App\classes\Prime;

if(isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages']=='odd-even' )
    {
        include 'pages/odd-even.php';
    }
    elseif ($_GET['pages']=='prime' )
    {
        include 'pages/prime.php';
    }
    elseif ($_GET['pages']=='all-products' )
    {
        $catagory=new Catagory();
        $product=$catagory->index();
//        print_r($product);
        include 'pages/all-products.php';
    }
}
elseif (isset($_POST['btn'])){
    $calculator=new Calculator($_POST);
    $res=$calculator->index();
    include 'pages/home.php';
}

elseif(isset($_POST['button']))
{
    $oddeven=new OddEven($_POST);
    $result=$oddeven->index();
    include 'pages/odd-even.php';
}
elseif(isset($_POST['pbtn']))
{
    $prime=new Prime($_POST);
    $result=$prime->index();
    include 'pages/prime.php';
}