<?php


namespace App\classes;


class Auth
{
    protected $email;
    protected $pass;
    protected $authpass;
    protected $authEmail;
    public function __construct($post=null)
    {
        if($post)
        {
            $this->email=$post['email'];
            $this->pass=$post['pass'];
        }
    }

    public function login()
    {
        $this->authEmail='admin@admin.com';
        $this->authpass='12345';
        if($this->email==$this->authEmail&&$this->pass==$this->authpass)
        {
            session_start();
            $_SESSION['id']=rand(10,1000);
            header('Location:action.php?pages=file-upload');
        }
        else{
            return 'Incorrect!';
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location:action.php?pages=login');
    }

}

