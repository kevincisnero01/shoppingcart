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
        $orders = Order::all();
        return view('orders-index',['orders' => $orders]);
    }

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


    public function show($id)
    {
        $order = Order::find($id);
        $order_detail = $order->products;
        //dd($order_detail);
        return view('orders-show',['order' => $order, 'order_detail' => $order_detail]);
    }


    public function edit($id)
    {
        $order = Order::find($id);
         return view('orders-edit',['order' => $order]);
    }


    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->route('orders.index');
    }

}
