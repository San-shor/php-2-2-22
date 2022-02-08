<?php


namespace App\classes;

class FullName
{
    public $firstName;
    public $lastName;
    protected $fullname;

    public function __construct($data=null)        //automatically print kore without calling
    {
//        echo 'hello';
//        echo '<pre>';
//        print_r($data);
//        echo $data['fn'];
        if($data){
            $this->firstName=$data['fn'];
            $this->lastName=$data['ln'];
        }

    }

    public function index(){
//        echo $this->lastName;
        header('Location:action.php?pages=full-name&&a=b');   //? sign diye value send

    }
    public function getFullname()
    {
        $this->fullname= $this->firstName. $this->lastName;
//        echo $this->fullname;
        return  $this->fullname;
    }
}