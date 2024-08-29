<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);

    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);

    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }

}