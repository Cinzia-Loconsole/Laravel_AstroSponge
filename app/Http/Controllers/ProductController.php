<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        $signs=[
            ['id'=>'1', 'name'=> 'Ariete','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/ariete.png'],
            ['id'=>'2', 'name'=> 'Toro','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/toro.png'],
            ['id'=>'3', 'name'=> 'Gemelli','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/gemelli.png'],
            ['id'=>'4', 'name'=> 'Cancro','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/cancro.png'],
            ['id'=>'5', 'name'=> 'Leone','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/leone.png'],
            ['id'=>'6', 'name'=> 'Vergine','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/virgo.png'],
            ['id'=>'7', 'name'=> 'Bilancia','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/libra.png'],
            ['id'=>'8', 'name'=> 'Scorpione','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/scorpio.png'],
            ['id'=>'9', 'name'=> 'Saggitario','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/sagittario.png'],
            ['id'=>'10', 'name'=> 'Capricorno','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/capricorn.png'],
            ['id'=>'11', 'name'=> 'Acquario','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/acquario.png'],
            ['id'=>'12', 'name'=> 'Pesci','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/pesci.png'],
        ];

        return view('products' , compact('signs'));
    }

    public function show($id){

        $signs=[
            ['id'=>'1', 'name'=> 'Ariete','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/ariete.png'],
            ['id'=>'2', 'name'=> 'Toro','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/toro.png'],
            ['id'=>'3', 'name'=> 'Gemelli','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/gemelli.png'],
            ['id'=>'4', 'name'=> 'Cancro','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/cancro.png'],
            ['id'=>'5', 'name'=> 'Leone','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/leone.png'],
            ['id'=>'6', 'name'=> 'Vergine','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/virgo.png'],
            ['id'=>'7', 'name'=> 'Bilancia','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/libra.png'],
            ['id'=>'8', 'name'=> 'Scorpione','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/scorpio.png'],
            ['id'=>'9', 'name'=> 'Saggitario','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/sagittario.png'],
            ['id'=>'10', 'name'=> 'Capricorno','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/capricorn.png'],
            ['id'=>'11', 'name'=> 'Acquario','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/acquario.png'],
            ['id'=>'12', 'name'=> 'Pesci','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/pesci.png'],
        ];

    foreach($signs as $sign){

        if($sign['id']==$id){
            return view('productsDetails' , compact ('sign'));
        }

    }

    }
}
