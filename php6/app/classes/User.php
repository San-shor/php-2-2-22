<?php


namespace App\classes;


class User
{
    protected $name='bitm';
    protected $city='dhaka';

    public function index()
    {
        echo "Institue Name is $this->name $ city is $this->city";
    }

}