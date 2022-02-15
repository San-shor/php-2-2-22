<?php


namespace App\classes;


class Student
{
    protected $name;
    protected $email;
    protected $phone,$result,$imageName,$imageDirectory,$value, $file;

    public function __construct($data=null,$FILE=null)
    {
        if($data)
        {
            $this->name=$data['name'];
            $this->email=$data['email'];
            $this->phone=$data['phn'];
            $this->value=$data;

        }
        if($FILE)
        {
            $this->file=$FILE['img'];
//            echo $this->file;

        }
    }

    public function index()
    {
//        echo '<pre>';
//        print_r($_FILES['img']);
//        $this->imageName=$_FILES['img']['name'];
//        $this->imageDirectory='assets/img/upload/'.$this->imageName;
//        move_uploaded_file($_FILES['img']['tmp_name'],$this->imageDirectory);
//        echo 'success';
//        $this->imagesUpload();
        $db='db.txt';
        $file=fopen($db,'a');
        fwrite($file,'hello World');
        fclose($file);
        echo 'success';

    }
    public function imagesUpload()
    {
        $this->imageName=time().$this->file['name'];
        $this->imageDirectory='assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->file['tmp_name'],$this->imageDirectory);
        echo 'success';
    }
}

