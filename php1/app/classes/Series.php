<?php


namespace App\classes;


class Series
{
    protected $startNumber;
    protected $endNumber;
    protected $i;
    protected $result;
    protected $type;
    protected $tempStart;
    protected $tempEnd;

    public function __construct($data=null)
    {
        if($data){

            $this->startNumber=$data['first_number'];
            $this->endNumber=$data['last_number'];
            $this->type = $data['type'];
        }

    }

    public function index()
    {
        if($this->type=='desc')
        {
            if($this->startNumber > $this->endNumber)
            {
                $this->tempStart=$this->startNumber;
                $this->tempEnd=$this->endNumber;
            }
            else{
                $this->tempStart=$this->endNumber;
                $this->tempEnd=$this->startNumber;
            }
            for ($this->i = $this->tempStart; $this->i >=$this->tempEnd ; $this->i--)
            {
//           echo $this->i;
                $this->result.=$this->i.' ';

            }
        }
        else{
            if($this->startNumber < $this->endNumber)
            {
                $this->tempStart=$this->startNumber;
                $this->tempEnd=$this->endNumber;
            }
            else
            {
                $this->tempStart=$this->endNumber;
                $this->tempEnd=$this->startNumber;
            }
            for ($this->i = $this->tempStart; $this->i <= $this->tempEnd ; $this->i++)
            {
//           echo $this->i;
                $this->result.=$this->i.' ';

            }
        }

        return $this->result;
    }
}