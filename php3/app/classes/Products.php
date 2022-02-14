<?php


namespace App\classes;


class Products
{
    protected $allProducts;
    protected $result=[];

    public function index()
    {
        return [
            0=>[
                'id'=>1,
                'catagory_id'=>1,
                'name'=>'T-shirt',
                'price'=>700,
                'description'=>'black',
                'img'=>'assets/img/1.jpg'
            ],
            1=>[
                'id'=>2,
                'catagory_id'=>1,
                'name'=>'T-shirt',
                'price'=>600,
                'description'=>'blue',
                'img'=>'assets/img/2.jpg'
            ],
            2=>[
                'id'=>3,
                'catagory_id'=>2,
                'name'=>'saree',
                'price'=>7000,
                'description'=>'karchupi',
                'img'=>'assets/img/saree1.jpg'
            ],
            3=>[
                'id'=>4,
                'catagory_id'=>2,
                'name'=>'saree',
                'price'=>5500,
                'description'=>'organza',
                'img'=>'assets/img/saree2.jpg'
            ],
            4=>[
                'id'=>5,
                'catagory_id'=>3,
                'name'=>'girls ghagra',
                'price'=>2500,
                'description'=>'silk',
                'img'=>'assets/img/child1.jpg'
            ],
            5=>[
                'id'=>6,
                'catagory_id'=>3,
                'name'=>'Boys party dress',
                'price'=>3500,
                'description'=>'shirt,pant,suit',
                'img'=>'assets/img/child2.jpg'
            ],


        ];
    }
    public function shortProducts($categoryid)
    {
        $this->allProducts=$this->index();

        foreach ( $this->allProducts as $product) {
            if($product['catagory_id']==$categoryid)
            {
                array_push($this->result,$product);
            }

        }
        return $this->result;

    }

    public function getProductDetails($productId)
    {
        $this->allProducts=$this->index();
        foreach ($this->allProducts as $product)
        {
            if($product['id']==$productId)
            {
                return $product;
            }
        }
    }

}