<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Adress;
use Auth;

class AdressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Users.Pages.Checkout.shipping-info');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*  $this->validate($request,[
            //'adressline'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required|integer',
            'phone'=>'required|integer',
        ]);  */



        $Adress = new Adress;
        $Adress ->user_id=$request->input('user_id');
        $Adress ->addressline=$request->input('addressline');
        $Adress ->city=$request->input('city');
        $Adress ->state=$request->input('state');
        $Adress ->zip=$request->input('zip');
        $Adress ->country=$request->input('country');
        $Adress ->phone=$request->input('phone');
        



        $Adress->save();
        

       /*  Auth::user()->Adress->save(new adress($request->all())); */
        return redirect()-> route('payment.store') -> with('success','Information stored');

       // Adress::create($request->all());
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
        //
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
