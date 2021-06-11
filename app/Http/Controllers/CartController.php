<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Cart::add(array(
            'id' => $request->id?$request->id:'1', // inique row ID
            'name' => $request->name?$request->name:'example',
            'price' =>$request->price?$request->price:20.20,
            'quantity' => $request->quantity?$request->quantity:1,
            'attributes' => array(
                'color' => $request->color?$request->color:'green',
                'size' => $request->size?$request->size:'big',
            )
        ));

        return back();/**/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cart)
    {
        $item = Cart::get($cart);

        //dd($item->attributes->size);

        return view('product-edit', [ 'item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cart)
    {

        //$item = Cart::get($cart); //dd($item);
        Cart::update($cart, array(
        'name' => $request->name,
        'price' =>$request->price,
        'attributes' => array(
            'color' => $request->color,
            'size' => $request->size
        ),
        'quantity' => $request->quantity,
        ));


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cart)
    {
        Cart::remove($cart);
        return back();
    }

    public function clear(){

       Cart::clear();

       return back();
       //Cart::session($userId)->clear();

    }

    
}
