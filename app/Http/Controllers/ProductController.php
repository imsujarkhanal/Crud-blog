<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products= Product::all();
        return view('products.index',['products'=> $products]);
    }


    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data= $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric|decimal:0,2',
            'price'=>'required|numeric|decimal:0,2',
            'description'=>'nullable'
        ]);

    //    $data['description'] = $data['description'] ?? null;

       $newProduct = Product::create($data);
       return redirect()->route('product.index');
    }

    public function edit (Product $product){
       return view('products.edit', ['product'=> $product]);
    }
}
