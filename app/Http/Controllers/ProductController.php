<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::orderBy('id', 'desc')->paginate(10) ;
        return view('product.index', compact('products')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('product.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',          
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category' => 'required|string|max:100',  
        ]) ;
        $product = Product::create($validated) ;
        return redirect()->route('products.index', $product)->with('success', 'Produit enregistré avec succès !') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('product.show', compact('product')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
