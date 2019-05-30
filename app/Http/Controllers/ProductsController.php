<?php

namespace App\Http\Controllers;


use App\product;
use App\category;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
        
        return view('Users.admin.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::pluck('name','id');
        return view('Users.admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       


       $this->validate($request,[

        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:10000'
        

       ]);

     

       $product = new product;
       $product ->name=$request->input('name');
       $product ->description=$request->input('description');
       $product ->size=$request->input('size');
       $product ->price=$request->input('price');
       $product ->category_id=$request->input('category_id');



       $product ->image= $request -> input('image');
       $image = $request ->image;
 
       if($image){
           $imageName = $image -> getClientOriginalName();
           $image -> move('Image',$imageName);
           $product['image']= $imageName;
       }
       $product->save();
       return redirect()-> route('product.create') -> with('success','Post Created');
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
