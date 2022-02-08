<?php


namespace App\classes;


class class4
{
    public $data=[];

    public function index(){
//        $this->data=[10,20,30,'BITM','Basis',100.20,true];
//        echo $this->data[0];
//        foreach ($this->data as $item){
//            echo $item.' ';
//        }
//        foreach ($this->data as $index=> $item){          //print index number of item
//            echo $index.' '.$item.' ';
//        }
//        $this->data=[
//            'name'=>'sanjida',
//            'email'=>'sanjidaewu89@gmail.com',
//            'mobile'=>'123456'
//        ];
//        foreach ($this->data as $info){
//            echo $info.' ';
//        }

//        $this->data=[
//            0=>[
//                'name'=>'sanjida',
//                'email'=>'sanjidaewu89@gmail.com',
//                'mobile'=>'123456'
//            ],
//            1=>[
//                'name'=>'shormila',
//                'email'=>'shormila68@gmail.com',
//                'mobile'=>'123456'
//            ]
//        ];
//        foreach ($this->data as $info){
////          echo $info['name'].' '.$info['email'].' '.$info['mobile'].'<br/>';
//            foreach($info as $value){
//                echo $value.' '.',<br/>';
//            }
//        }
//        $this->data=[
//            0=>[
//                'name'=>'sanjida',
//                'email'=>'sanjidaewu89@gmail.com',
//                'mobile'=>[
//                    'own'=>'123456',
//                    'amma'=>'789'
//                    ]
//            ],
//            1=>[
//                'name'=>'shormila',
//                'email'=>'shormila68@gmail.com',
//                'mobile'=>'123456'
//            ]
//        ];
//        foreach ($this->data as $info){
////          echo $info['name'].' '.$info['email'].' '.$info['mobile'].'<br/>';
//            foreach($info as $value){
//                if(is_array($value))
//                {
//                    foreach ($value as $v){
//                        echo $v.' '.',<br/>';
//                    }
//                }
//                else {
//                    echo $value . ' ' . '<br/>';
//                }
//
//
//            }
//        }

        $this->data=[
            0=>[
                'name'=>'sanjida',
                'email'=>'sanjidaewu89@gmail.com',
                'mobile'=>[
                    'own'=>'123456',
                    'amma'=>'789'
                    ]
            ],
            1=>[
                'name'=>'shormila',
                'email'=>'shormila68@gmail.com',
                'mobile'=>'123456'
            ],
            2=>'BITM',
            3=>[
                'address'=>'jamai er bari',
                'nationality'=>'Bangladeshi',
                'religion'=>'islam'
            ]
    ];
//        foreach ($this->data as $info){
//            if(is_array($info)){
//                foreach($info as $value){
//                    if(is_array($value))
//                    {
//                        foreach ($value as $v){
//                            echo $v.' '.',<br/>';
//                        }
//                    }
//                    else {
//                        echo $value . ' ' . '<br/>';
//                    }
//
//
//                }
//            }
//            else{
//                echo $info.'<br/>';
//            }
//
//
//        }
        echo '<pre>';
//        print_r($this->data);
        var_dump($this->data);
    }
}