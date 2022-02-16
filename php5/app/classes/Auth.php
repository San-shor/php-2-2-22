<?php


namespace App\classes;


class Auth
{
    protected $email;
    protected $pass;
    protected $authpass;
    protected $authEmail;
    public function __construct($post)
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
        if($this->email=$this->authEmail&&$this->pass=$this->authpass)
        {
            header('Location:action.php?pages=file-upload');
        }
        else{
            return 'todays class is over';
        }
    }

    public function logout()
    {
        header('Location:action.php?pages=login');
    }

}

