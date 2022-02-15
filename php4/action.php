<?php

require_once "vendor/autoload.php";
use App\classes\Student;

if(isset($_GET['pages']))
{
    if($_GET['pages']=='home')
    {

        include 'pages/home.php';
    }

}
elseif (isset($_POST['btn']))
{
    $studentInfo=new Student($_POST,$_FILES);
    $studentInfo->index();
}