<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::get();
      return inertia::render('front/product/products',[
        'products'=>$products

    ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return inertia::render('front/product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $request->validate([
            'name'=>'required|string|max:125',
            'price'=>'required|integer|'
           ]);
           product::create([
            'name'=>$request->name,
            'price'=>$request->price
           ]);
           return redirect()->to('/product')->with('message','product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return inertia::render('front/product/show',[
            'products'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
      
        return inertia::render('front/product/edit',[
            'product'=>$product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'name'=>'required|string|max:125',
            'price'=>'required|integer|'
           ]);
           $product->update([
            'name'=>$request->name,
            'price'=>$request->price,
           ]);
           return redirect()->to('/product')->with('message','product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
     $product->delete();
     return redirect()->to('/product')->with('message','product deleted successfully');

    }
}
