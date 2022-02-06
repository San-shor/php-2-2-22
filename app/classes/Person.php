<?php


namespace App\classes;


class Person
{
    public $district='Savar';
    protected $division='Dhaka';
    private $country='Bangladesh';

    public function X(){
        echo 'Dhaka';
    }
    protected function Y(){
        echo 'Dhaka';
    }
    private function country(){
        echo 'Bangladesh';
    }


}