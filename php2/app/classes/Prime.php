<?php


namespace App\classes;


class Prime
{
    protected $number;
    protected $i;
    protected $result;
    protected $flag;

    public function __construct($data)
    {
        if ($data) {
            $this->number = $data['input_value'];
        }

    }
    public  function index()
    {
        if ($this->number == 1) {
            return $this->flag = 0;
        }
        for ($this->i = 2; $this->i <= $this->number / 2; $this->i++) {
            if ($this->number % $this->i == 0) {
                return $this->flag = 0;
            }
            return $this->flag = 1;
        }

    }



}