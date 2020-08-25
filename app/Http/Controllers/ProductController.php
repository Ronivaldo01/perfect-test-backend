<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $prod;

    public function __construct(){
        $this->prod = new Product();
    }

    public function index()
    {
        $products = $this->prod::all();
        return view('dashboard',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = $this->prod;
        $prod->product = $request->input('name');
        $prod->description = $request->input('description');
        $prod->price = $request->input('price');
        $prod->save();
        return view('crud_products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id){
            $prod = $this->prod;
            $product = $prod->find($id);
            
            return view('crud_products',compact('product'));
        }
       return view('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            $product = Product::find($id);
            if(isset($product)){
                $product->product = $request->input('name');
                $product->description = $request->input('description');
                $product->price = $request->input('price');
                $product->save();
                return  redirect('/')->with('success', 'Product Update');

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
        //
    }
}
