<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;
use App\Http\Requests\ElementRequest;


class ElementController extends Controller
{

    public function index(){

        $elements=Element::all();

        return view('element.index' , compact('elements'));

    }

    public function create(){

        return view('element.create');

    } 
    
    public function store(ElementRequest $request){

    //MASS ASSIGNMENT
        $element = Element::create([
        'name'=>$request->name,
        'price'=>$request->price,
        'description'=>$request->description,
        'img'=>$request->has('img') ? $request->file('img')->store('public/image') : null

        ]);

        return redirect(route('home'))->with('message','Complimenti, hai memorizzato correttamente il prodotto!');

    }
    
   

    public function show(Element $element){

        return view('element.show', compact('element'));

    }
}
