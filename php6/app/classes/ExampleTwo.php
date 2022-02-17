<?php


namespace App\classes;


trait ExampleTwo
{
    public $name='sanjida';
    protected $name1='akter';
    private $name2='shormila';

    public function index1()
    {
        echo "index1";
    }
    protected function index2()
    {
        echo "index2";
    }
    private function index3()
    {
        echo "index3";
    }
}