<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AddressController extends Controller
{

    public function store(Request $request)
    {

      $this->validate($request,[
            'addressline'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required|integer',
            'phone'=>'required',
        ]);


        $user = Auth::user();
        $user->addresses()->create($request->all());

        return redirect()->route('checkout.payment');
    }


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
        //
    }
    public function index()
    {
        //
    }


    public function create()
    {

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
