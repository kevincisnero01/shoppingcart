<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class CartController extends Controller
{

    public function index()
    {
        $cart = Cart::where('user_id',1)
        ->get();
        //dd($cart);
        return view('carts-index', ['cart' => $cart]);
    }


    public function store(Request $request)
    {
        //dd($request);
        $product = Product::find($request->product_id);

        Cart::add(array(
            'id' => $product->id, 
            'price' => $product->price,
            'quantity' => $request->quantity,
            'name' => $product->name,
            'attributes' => array(
                'image' => $product->image,
            )
        ));

        return back();/**/
    }


    public function show($id)
    {
       $item = Product::find($id);
        //dd($item);

        return view('carts-show', ['item' => $item]);
    }


    public function edit($id)
    {
        $item = Cart::get($id);
        return view('carts-edit', ['item' => $item]);
    }

    public function update(Request $request, $id)
    {

        $item = Cart::get($id); 
        //echo $id; dd($request->all());
        
        Cart::update($id, array(
        'quantity' => $request->quantity,
        ));

        return redirect()->route('carts.index');/**/
    }


    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }

    public function clear(){

       Cart::clear();
       return redirect()->route('catalogs.index');
    }


}
