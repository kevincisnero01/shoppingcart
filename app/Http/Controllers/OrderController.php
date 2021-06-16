<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{   
    public $user_test = 1;

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request;
        $cart = Cart::where('user_id',$this->user_test)->get();
        $date = '2021-06-15';
        $method = "transferencia";
        $status = "pendiente";
        //dd($request->all());


        $order = Order::create([
            'user_id' => $this->user_test,
            'quantity' => $datos->totalItems,
            'total' => $datos->totalPrices,
            'method' => $method,
            'status' => $status,
            'date' => $date,
        ]);
        //dd($order->products());

        foreach ($cart as $item) {
           $order->products()->attach([$item->product_id => ['quantity' => $item->quantity,'price' => $item->price ]]);
           $item->delete();
            //echo "'product_id' $item->product_id, 'quantity'  $item->quantity,'price'  $item->price <br>";
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
