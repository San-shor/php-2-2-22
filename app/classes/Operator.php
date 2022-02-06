<?php


namespace App\classes;


class Operator
{
    public $x;
    public $y;
    protected $z;

    public function index(){
//        echo 'hello Sir';
        $this->x=10;
        $this->y=20;
        $this->z=30;
//        echo $this->x+ $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x--;
//        echo ++$this->x;
//        echo $this->x--;
//        echo $this->x++;
//        echo $this->x--;
//        echo $this->x += $this->y;
//        echo $this->x -= $this->y;
//        echo $this->x *= $this->y;
//        echo $this->x /= $this->y;
//        echo $this->x .= $this->y;

            if($this->x > $this->y){
                echo "hello mc";
            }
            else{
                echo 'heda';
            }
    }
}