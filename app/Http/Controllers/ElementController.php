<?php

namespace App\Http\Controllers;

use App\Models\Shop;
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

        $shops=Shop::all();
        return view('element.create', compact ('shops'));

    } 
    
    public function store(ElementRequest $request){

        // dd($request->all());
       
    //MASS ASSIGNMENT
        $element = Element::create([
        'name'=>$request->name,
        'price'=>$request->price,
        'description'=>$request->description,
        'img'=>$request->has('img') ? $request->file('img')->store('public/image') : null

        ]);

        $element->shops()->attach($request->shops);

        return redirect(route('home'))->with('message','Complimenti, hai memorizzato correttamente il prodotto!');

    }
    
   

    public function show(Element $element){

        return view('element.show', compact('element'));

    }

    public function edit(Element $element)
    {
        $shops=User::all();

        return view('user.edit', compact('user', 'shops'));
    }

    public function update(Request $request, Element $element)
    {

        $element->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'img'=>$request->has('img') ? $request->file('img')->store('public/image') : null

        ]);

        $element->shops()->attach($request->shops);

        return redirect(route('home'))->with('message','Azione sul prodotto avvenuta correttamente!');

    }

    public function destroy(Element $element)
    {
        foreach($element->shops as $shop){
            $shop->elements()->detach($element->id);
        }

        $element->delete();

        return redirect(route('home'))->with('message','Prodotto cancellato correttamente!');
    }
}
