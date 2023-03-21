<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;


class ElementController extends Controller
{

    public function index(){

        $elements=Element::all();

        return view('element.index' , compact('elements'));

    }

    public function create(){

        return view('element.create');

    } 
    
    public function store(Request $request){

    //MASS ASSIGNMENT
        $element = Element::create([
        'name'=>$request->name,
        'price'=>$request->price,
        'description'=>$request->description
        ]);

        return redirect(route('home'))->with('message','Complimenti, hai memorizzato correttamente il prodotto!');

    }
    
   

    public function show(Element $element){

        return view('element.show', compact('element'));

    }
}
