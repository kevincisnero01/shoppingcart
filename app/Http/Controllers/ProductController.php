<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $count = $products->count();
        //dd($count);
        return view('products-index',['products' => $products, 'count' => $count]);
    }

    public function create()
    {
        return view('products-create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required|integer|min:1',
            'image' => 'required'
        ];

        $this->validate($request, $rules);

        $data = $request->all();
        $data['image'] = "img/".$request->image;
        $data['status'] = 1;

        $product = Product::create($data);

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products-edit',['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = Product::find($id);
        // dd($data); //dd($product);
        $product->fill($data);
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function catalog_index()
    {
        $products = Product::all();
        return view('catalog',['products' => $products]);
    }
}
