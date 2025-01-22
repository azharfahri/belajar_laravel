<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = order::all();
        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = product::all();
        $customer = Customer::all();
        return view('order.create', compact('product','customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->id_product = $request->id_product ;
        $order->quantity = $request->quantity ;
        $order->order_date = $request->date ;
        $order->id_customer = $request->id_customer ;
        $order->save();

        return redirect()->route('order.index')->with('success','Data Has Success Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::all();
        $order = Order::findorfail($id);
        $customer = Customer::all();
        return view('order.show', compact('product','customer','order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::all();
        $order = Order::findorfail($id);
        $customer = Customer::all();
        return view('order.edit', compact('product','customer','order'));
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
        $order = order::findOrFail($id);
        $order->id_product = $request->id_product ;
        $order->quantity = $request->quantity ;
        $order->order_date = $request->date ;
        $order->id_customer = $request->id_customer ;
        $order->save();

        return redirect()->route('order.index')->with('success','Data Edit Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::findOrFail($id);
        $order->delete();
        return redirect()->route('order.index')->with('success','Data Has Deleted');
    }
}
