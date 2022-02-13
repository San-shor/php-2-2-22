<?php


namespace App\classes;


class Word
{
    protected $inputValue;
    protected $result;
    protected $type;

    public function __construct($post=null)
    {
//        echo '<pre>';
//        print_r($post);
//        exit();
        if($post) {
            $this->inputValue = $post['input_value'];
            $this->type = $post['type'];
        }
    }

    public function index()
    {
        if ($this->type=='word')
        {
            $this->result=str_word_count($this->inputValue);
        }
        else{
            $this->result=strlen($this->inputValue);
        }
//        $this->result=[
//            'givenword'=>'given word' .$this->inputValue,
//            'wordcount'=>'total word'.str_word_count($this->inputValue),
//            'charCount'=>'total char'.strlen($this->inputValue),
//        ];
        return $this->result;
//        $this->result= str_word_count($this->inputValue);
//        return $this->result;
//        echo strlen($this->inputValue);


    }

}