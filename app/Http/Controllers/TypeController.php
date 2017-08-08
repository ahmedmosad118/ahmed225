<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Core\ProductType;
use App\Models\Core\Product;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=ProductType::all();
        return view('products.addproduct_type',compact("types"));
    }


    public function store(Request $request)
    {
         $this->validate($request, [
        'name' => 'required|max:255',

    ]);
        $type=new ProductType;
        $type->name=$request->name;
        $type->parent_id =$request->parent_id ;

        $type->save();
        return redirect('/show-producttype');

    }

    public function show()
    {
            $types=ProductType::all();
            return view('products.showtypes',compact("types"));

    }

    
    public function edit($id)
    {
            $type=ProductType::find($id);
            $types=ProductType::all();
            return view('products.edittype',compact("types",'type'));
  
    }

    
    public function update(Request $request, $id)
    {
            $type=ProductType::find($id);
            $type->name=$request->name;
            $type->parent_id =$request->parent_id ;
            $type->save();
            return redirect('/show-producttype');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=ProductType::find($id);
        $type->delete();
        
        return redirect('/show-producttype');

    }
}
