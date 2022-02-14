<?php

require_once "vendor/autoload.php";
use App\classes\Catagory;
use App\classes\Products;

if(isset($_GET['pages']))
{
    if($_GET['pages']=='all-products')
    {
        $catagory=new Catagory();
        $catagories=$catagory->catagory();
        $product=new Products();
        $products=$product->index();
        include 'pages/allproducts.php';
    }
    elseif ($_GET['pages']=='category')
    {
        $catagory=new Catagory();
        $catagories=$catagory->catagory();

        $product=new Products();
        $products=$product->shortProducts($_GET['catagory_id']);
        include "pages/allproducts.php";


    }
    elseif ($_GET['pages']=='productDetails')
    {
        $catagory=new Catagory();
        $catagories=$catagory->catagory();
        $product=new Products();
        $productDetails=$product->getProductDetails($_GET['product_id']);
        include "pages/productDetail.php";


    }
}
