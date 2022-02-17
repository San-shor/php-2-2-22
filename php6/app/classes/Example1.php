<?php


namespace App\classes;


abstract class Example1
{
    public $hello='sanjida';
    protected $helloOne='Akter';
    private $helloTwo='Shormila';

    public function helloFour()
    {
        echo 'Hello Four';
    }
    abstract function helloFive();

}