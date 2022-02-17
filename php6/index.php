<?php

require_once "vendor/autoload.php";

//use App\classes\Home;
use App\classes\Student;

//$home=new Home();
//$home->index();

//session_start();
//echo session_id();
//$_SESSION['name']='BITM';
//$_SESSION['city']='Dhaka';
//$_SESSION['country']='Bangladesh';

$student=new Student();
$student->manage();