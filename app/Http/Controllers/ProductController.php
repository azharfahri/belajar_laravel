<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_product' => 'required',
            'merk' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
        $product = new Product();
        $product->name_product = $request->name_product ;
        $product->merk = $request->merk ;
        $product->price = $request->price ;
        $product->stock = $request->stock ;
        $product->save();

        return redirect()->route('product.index')->with('success','Data Has Success Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product =product::FindOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =product::FindOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_product' => 'required',
            'merk' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
        $product = product::findOrFail($id);
        $product->name_product = $request->name_product ;
        $product->merk = $request->merk ;
        $product->price = $request->price ;
        $product->stock = $request->stock ;
        $product->save();

        return redirect()->route('product.index')->with('success','Data Edit Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success','Data Has Deleted');
    }
}
