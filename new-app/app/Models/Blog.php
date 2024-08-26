<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Arr;

class Blog
{



 public static function all():array
   {


       return[
         [
               'id'=>1,
              'image' =>'image51.jpg',
             'title'=>'Smart Watch',
              'auth'=>'lena alnajjar',
              'description'=>'When describing ,Smart Watch its helpful to consider various aspects that define their characteristics and performance.',
               'price'=>'1220'

           ],
          [
               'id'=>2,
              'image' =>'image6.jpg',
               'title'=>'Head Phone',
              'auth'=>'jak elmans',
               'description'=>'When describing headphones, its helpful to consider various aspects that define their characteristics and performance.',
               'price'=>'3220'
           ],
           [
               'id'=>3,
              'image' =>'image7.jpg',
               'title'=>'Laptop HP',
               'auth'=>'jon black',
               'description'=>'Describing an HP laptop involves detailing several key aspects to give a comprehensive overview of its features and performance.',
              'price'=>'4220'

           ]
       ];

    }
    public static function find(int $id):array{
       $blog =  Arr::first(static::all() , fn($blog) => $blog['id'] == $id);
       if(! $blog){
           abort(404);
     }
       return $blog;
    }

}
