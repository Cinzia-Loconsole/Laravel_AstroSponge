<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{


    public function index(){
        
        $caracters=[
            ['id'=>'1', 'name'=>'Spongebob Squarepants', 'sign'=>'Cancro' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!' , 'img'=>'/media/spongebob.png'],
            ['id'=>'2', 'name'=>'Patrick Stella', 'sign'=>'Leone' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!' ,'img'=>'/media/patrick.png'],
            ['id'=>'3', 'name'=>'Squiddi Tentacolo', 'sign'=>'Capricono' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/squiddi.png'],
            ['id'=>'4', 'name'=>'Sandy Cheeks', 'sign'=>'Pesci' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/sandy.png'],
            ['id'=>'5', 'name'=>'Sheldon J. Plankton', 'sign'=>'Scoprione' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!' , 'img'=>'/media/plankton.png'],
            ['id'=>'6', 'name'=>'Mr. Krabs', 'sign'=>'Gemelli' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!' , 'img'=>'/media/MrKrabs.png'],
    
        ];
        
        return view('about', compact('caracters'));
    }

    public function show($id){

        $caracters=[
            ['id'=>'1', 'name'=>'Spongebob Squarepants', 'sign'=>'Cancro' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!' , 'img'=>'/media/spongebob.png'],
            ['id'=>'2', 'name'=>'Patrick Stella', 'sign'=>'Leone' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!' ,'img'=>'/media/patrick.png'],
            ['id'=>'3', 'name'=>'Squiddi Tentacolo', 'sign'=>'Capricono' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/squiddi.png'],
            ['id'=>'4', 'name'=>'Sandy Cheeks', 'sign'=>'Pesci' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!', 'img'=>'/media/sandy.png'],
            ['id'=>'5', 'name'=>'Sheldon J. Plankton', 'sign'=>'Scoprione' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!' , 'img'=>'/media/plankton.png'],
            ['id'=>'6', 'name'=>'Mr. Krabs', 'sign'=>'Gemelli' , 'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolore!' , 'img'=>'/media/MrKrabs.png'],
    
        ];

        foreach($caracters as $caracter){

            if($caracter['id']==$id){
                return view('aboutDetails' , compact ('caracter'));
            }
    
        }

    }
}
