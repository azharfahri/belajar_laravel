<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = customer::all();
        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
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
            'name_customer' => 'required',
            'gender' => 'required',
            'contact' => 'required',
        ]);
        $customer = new customer();
        $customer->name_customer = $request->name_customer ;
        $customer->gender = $request->gender ;
        $customer->contact = $request->contact ;
        $customer->save();

        return redirect()->route('customer.index')->with('success','Data Has Success Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer =customer::FindOrFail($id);
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer =customer::FindOrFail($id);
        return view('customer.edit', compact('customer'));
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
            'name_customer' => 'required',
            'gender' => 'required',
            'contact' => 'required',
        ]);
        $customer = customer::findOrFail($id);
        $customer->name_customer = $request->name_customer ;
        $customer->gender = $request->gender ;
        $customer->contact = $request->contact ;
        $customer->save();

        return redirect()->route('customer.index')->with('success','Data Edit Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index')->with('success','Data Has Deleted');
    }
}
