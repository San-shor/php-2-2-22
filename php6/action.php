<?php

require_once "vendor/autoload.php";
use App\classes\FileUpload;
use App\classes\Auth;

if(isset($_GET['pages']))
{
    if($_GET['pages']=='file-upload')
    {

        include 'pages/fileupload.php';
    }
    elseif ($_GET['pages']=='view-students')
    {
        $fileUpload=new FileUpload();
        $student=$fileUpload->getAllstudentInfo();
        include 'pages/viewStudent.php';
    }
    elseif($_GET['pages']=='login')
    {

        include 'pages/login.php';
    }
    elseif($_GET['pages']=='logout')
    {
        $auth=new Auth();
        $auth->logout();

    }

}
elseif (isset($_POST['btn']))
{
    $fileUpload=new FileUpload($_FILES,$_POST);
    $msg=$fileUpload->index();
    include 'pages/fileupload.php';
}
elseif (isset($_POST['loginbtn']))
{
    $auth=new Auth($_POST);
    $message=$auth->login();
    include 'pages/login.php';
}

