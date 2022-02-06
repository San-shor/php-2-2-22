<?php


namespace App\classes;
use App\classes\Person;

//class Example2
//{
//    public $firstName;
//    protected $middleName;
//    private $lasttName;
//    public $lastNumber=20;
//    public $firstNumber=10;
//
//    public function  index(){
//         $this->firstName="shormila";
//        $this->firstName='sanshor';
//        $x='bd';
//        $x=10;
//        echo gettype($this->firstName);
//        $this->firstName="Sanjida";
//       echo $this->firstName;
//    }
//    protected function methodOne(){
//        $this->middleName='Akter';
//        echo $this->middleName;
//    }
//
//    private function methodTwo(){
//        $this->lasttName="Shormila";
//        echo $this->lasttName;
//    }
//}

class Example2 extends Person
{
    public $firstName;
    protected $middleName;
    private $lasttName;
    public $lastNumber=20;
    public $firstNumber=10;

    public function  index(){
        $this->firstName="shormila";
        $this->firstName='sanshor';
        $x='bd';
        $x=10;
        echo gettype($this->firstName);
        $this->firstName="Sanjida";
        echo $this->firstName;
    }
    protected function methodOne(){
        $this->middleName='Akter';
        echo $this->middleName;
    }

    private function methodTwo(){
        $this->lasttName="Shormila";
        echo $this->lasttName;
    }
    public function methodThree(){
//        echo $this->x();
//        echo $this->Y();
//        echo $this->country();
        $this->X();
        $this->Y();
//        $this->country();
    }

}