<?php


namespace App\classes;


class Catagory
{
      public function index()
      {
          return [
              0=>[
                  'id'=>1,
                  'name'=>'Man Fashion',
              ],
              1=>[
                  'id'=>2,
                  'name'=>'Woman Fashion',
              ],
              2=>[
                  'id'=>3,
                  'name'=>'Kids Fashion',
              ],
          ];
      }
}