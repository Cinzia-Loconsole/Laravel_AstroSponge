<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        $signs=[
            ['id'=>'1', 'name'=> 'Ariete','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'2', 'name'=> 'Toro','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'3', 'name'=> 'Gemelli','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'4', 'name'=> 'Cancro','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'5', 'name'=> 'Leone','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'6', 'name'=> 'Vergine','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'7', 'name'=> 'Bilancia','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'8', 'name'=> 'Scorpione','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'9', 'name'=> 'Saggitario','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'10', 'name'=> 'Capricorno','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'11', 'name'=> 'Acquario','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
            ['id'=>'12', 'name'=> 'Pesci','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>''],
        ];

        return view('products' , compact('signs'));
    }

    // public function show(){
    
    //     return view('products');
    // }
}
