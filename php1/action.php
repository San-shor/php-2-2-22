<?php

require_once 'vendor/autoload.php';
use App\classes\Word;
use App\classes\Series;
use App\classes\Product;

if(isset($_GET['pages']))
{
    if($_GET['pages']=='home')
    {
        include 'pages/series.php';
    }
//    elseif (isset($_GET['pages'])){
//        include 'pages/series.php';
//    }
    elseif ($_GET['pages']=='all-product')
    {
        $product=new Product();
        $product=$product->getAllProduct();
        include 'pages/product.php';
    }
}
//elseif (isset($_POST['btn']))
//{
//    $word=new Word($_POST);
//    $result=$word->index();
////    print_r($result);
////    extract($result);          //this method will convert
//    include 'pages/home.php';
//}
elseif (isset($_POST['seriesbtn'])){
    $series=new Series($_POST);
    $result=$series->index();
//    $series->index();
//    $result=$word->series();
    include 'pages/series.php';
}