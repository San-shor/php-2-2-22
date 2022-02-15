<?php


namespace App\classes;


class Catagory
{
    public function index()
    {
        return [
           0=>[
               'id'=>1,
               'name'=>'home',
           ],
        1=>[
            'id'=>2,
            'name'=>'file upload',
        ],
        2=>[
            'id'=>3,
            'name'=>'file write',
        ]



    ];
    }
}