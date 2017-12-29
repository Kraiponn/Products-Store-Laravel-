<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Requests\StoreProductPost;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Products::paginate(3);

        return view('products.index',[
            'products' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $request)
    {
        $product = new Products();
        $product->p_name = $request->p_name;
        $product->save();

        $request->session()->flash('status', 'Add new product type successful!.');
        return redirect()->action('ProductController@index');
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
        $product = Products::find($id);
        return view('products.edit', [
            'products' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductPost $request, $id)
    {
        $product = Products::find($id);
        $product->p_name = $request->p_name;
        $product->save();

        $request->session()->flash('status', 'Update success.');
        return redirect()->action('ProductController@index');
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

    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();

        session()->flash('status', 'Delete product id '.$product->id. ' success!');
        return redirect()->action('ProductController@index');

        // return 'Delete id '.$id;
    }

}
