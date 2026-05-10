<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }


    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data= $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric|min:0',
            'price'=>'required|numeric|min:0',
            'description'=>'nullable'
        ]);

    //    $data['description'] = $data['description'] ?? null;

       $newProduct = Product::create($data);
       return redirect()->route('product.create');
    }
}
