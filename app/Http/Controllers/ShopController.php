<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Shop::all();

        return view('shop.index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
         $shop= Shop::create([
            'name'=>$request->name,
            'city'=>$request->city,
            'description'=>$request->description,
            'image'=>$request->has('image') ? $request->file('image')->store('public/image'):null,
            'user_id'=>Auth::user()->id
        ]);

        return redirect(route('home'))->with('message', 'Hai memorizzato correttamente il negozio!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        return view('shop.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        return view('shop.edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        $shop->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'description'=>$request->description,
            'image'=>$request->has('image') ? $request->file('image')->store('public/image'):$shop->image
        ]);

        return redirect(route('home'))->with('message', 'Azione sul negozio avvenuta correttamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();

        return redirect(route('home'))->with('message', 'Negozio cancellato correttamente!');

    }
}
