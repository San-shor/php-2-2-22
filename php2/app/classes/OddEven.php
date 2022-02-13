<?php


namespace App\classes;


class OddEven
{
    protected $num1;
    protected $num2;
    protected $result;
    protected $type;
    protected $i;

    public function __construct($post = null)
    {
        if ($post) {

            $this->num1 = $post['firstnum'];
            $this->num2 = $post['lastnum'];
            $this->type = $post['type'];
        }


    }


    public function index()
    {
        if($this->num1 < $this->num2)
        {
            for ($this->i = $this->num1; $this->i <= $this->num2; $this->i++) {
                if ($this->type == 'even') {
                    if ($this->i % 2 == 0) {
                        $this->result .= $this->i . ' ';
                    }
                } elseif ($this->type == 'odd') {
                    if ($this->i % 2 != 0) {
                        $this->result .= $this->i;
                    }

                }

            }
        }
        return $this->result;

    }
}

