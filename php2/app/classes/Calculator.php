<?php


namespace App\classes;


class Calculator
{
    protected $firstnum;
    protected $lastnum;
    protected $result;
    protected $option;
    public function __construct($post=null)
    {
        if($post) {

            $this->firstnum = $post['first_number'];
            $this->lastnum = $post['last_number'];
            $this->option = $post['option'];
        }


    }

    protected function add()
    {
        return $this->firstnum +$this->lastnum;

    }
    protected function sub()
    {
        return $this->firstnum - $this->lastnum;

    }
    protected function mul()
    {
        return $this->firstnum * $this->lastnum;

    }
    protected function div()
    {
        return $this->firstnum / $this->lastnum;

    }
    protected function mod()
    {
        return $this->firstnum % $this->lastnum;

    }
    public function index(){

        switch ($this->option){
            case '+':
                $this->result=$this->add();
                break;
            case '-':
                $this->result=$this->sub();
                break;
            case '*':
                $this->result=$this->mul();
                break;
            case '/':
                $this->result=$this->div();
                break;
            case '%':
                $this->result=$this->mod();
                break;
        }
        return $this->result;

    }
}