<?php


namespace App\classes;
use App\classes\User;
use App\classes\InterfaceClass;
use App\classes\Example;
use App\classes\Example1;

class Student extends Example1 implements InterfaceClass,Example
{
    use ExampleTwo;
    protected $country='Bangladesh';

    public function __construct()
    {
        $this->name='basis';
        $this->city='Savar';
    }

    public function manage()
    {

//        echo $this->country;
//        echo $this->name.' ';
//        echo $this->city;
//        echo "Institue Name is $this->name $ city is $this->city";
        echo $this->index1();
    }

    public function one()
    {
        echo 'hello';
    }
    public function two()
    {
        echo "h2";
    }
    public function three()
    {
        // TODO: Implement three() method.
        echo "h3";
    }

    public function helloFive()
    {
        // TODO: Implement helloFive() method.
        echo "hello5";
    }

}