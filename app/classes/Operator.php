<?php


namespace App\classes;


class Operator
{
    public $x;
    public $y;
    protected $z;
    public $i;

    public function index(){
//        echo 'hello Sir';
//        $this->x=10;
//        $this->y=20;
//        $this->z=30;
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

//            if($this->x > $this->y){
//                echo "hello mc";
//            }
//            else{
//                echo 'heda';
//            }
//        for($this->i=45; $this->i > 23;$this->i--){
//            echo $this->i;
//            echo "<br>";
//        }
//        $this->i=10;
//        while ($this->i < 20){
//            echo $this->i;
//            $this->i++;
//        }

        $this->i=10;
        do{
            echo $this->i;
            $this->i++;
        }while($this->i <20);


    }
}