<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public $user_test = 1;

    public function index()
    {
        $cart = Cart::where('user_id', $this->user_test)
        ->with('user','product')
        ->get();

        $subtotales = Cart::Select(DB::raw("SUM(price*quantity) AS subtotal"))
        ->groupBy('id')
        ->pluck('subtotal');
        //dd($subtotales);
        
        $totalItems = $cart->sum('quantity');
        $totalPrices = $subtotales->sum();

        return view('carts-index', [
            'cart' => $cart,
            'subtotales' => $subtotales,
            'totalItems' => $totalItems,
            'totalPrices' => $totalPrices
        ]);
    }


    public function store(Request $request)
    {
        $datos = $request;
        $user = User::find($this->user_test);
        $product = Product::find($datos->product_id);
        //dd();

        $cart = Cart::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'price' => $product->price,
            'quantity' => $datos->quantity,
        ]);

        return back();
    }


    public function show($id)
    {
       $item = Product::find($id);
        //dd($item);

        return view('carts-show', ['item' => $item]);
    }


    public function edit($id)
    {
        $item = Cart::find($id);
        return view('carts-edit', ['item' => $item]);
    }

    public function update(Request $request, $id)
    {

        $cart = Cart::find($id); 
        //dd($request->all());

        $cart->quantity = $request->quantity;
        $cart->save();
    
        return redirect()->route('carts.index');/**/
    }


    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return back();
    }

    public function clear(){

       $carts = Cart::where('user_id',$this->user_test);
       $carts->delete();

       return redirect()->route('catalogs.index');
    }

}
