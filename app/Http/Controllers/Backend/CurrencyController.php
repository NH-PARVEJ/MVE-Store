<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function currency()
    {
       $currencies = Currency::orderBy('currency_name', 'asc')->get();
       return view('backend.pages.currency.manage', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $currency = new Currency();

       $currency->currency_name  = $request->currency_name;
       $currency->currency_sign  = $request->currency_sign;
       $currency->status         = $request->status;

       $currency->save();

       $notification = array(
        'message'    => 'A New Currency Created Successfully', 
        'alert-type' => 'success'
    );
     
       return redirect()->route('currency.manage')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currency = Currency::find($id);
        if(!is_null($currency)){
            return view('backend.pages.currency.edit', compact('currency'));
        }
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
       $currency = Currency::find($id);

        if(!is_null($currency)){

            $currency->currency_name  = $request->currency_name;
            $currency->currency_sign  = $request->currency_sign;
            $currency->status         = $request->status;
     
            $currency->save();
            $notification = array(
                'message'    => 'The Currency Information Updated', 
                'alert-type' => 'info'
            );
            return redirect()->route('currency.manage')->with($notification);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currency = Currency::find($id);
        if(!is_null( $currency)){
            $currency->delete();
            $notification = array(
                'message'    => 'The Currency is Now On Soft Delete Mode', 
                'alert-type' => 'error'
            );
            return redirect()->route('currency.manage')->with( $notification);
        }
        else{
           
        }
    }
}
