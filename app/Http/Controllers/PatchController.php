<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Core\Product;
use App\Models\Core\Patch;
use App\Models\Core\Supplier;
use App\Models\Core\Property;
use App\Models\Core\PatchPropertyValues;


class PatchController extends Controller
{
    public function index()
    {
        //
    }

    
    public function create()
    {
        $products=Product::all();
        $suppliers=Supplier::all();

        return view("patches.addpatch",compact("products","suppliers"));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'buying_price' => 'required',
        'count' => 'required'

    ]);
        $patch=new Patch;
        $patch->name=$request->name;
        $patch->buying_price =$request->buying_price;
        $patch->count=$request->count;
        $patch->supplier_id=$request->supplier_id;
        $patch->product_id=$request->product_id;


        $patch->save();
        return redirect('/show-patch');

    }

    public function show()
    {
        $patches=Patch::all();
        return view('patches.showpatches',compact("patches"));

    }

 
    public function edit($id)
    {
        $patch=Patch::find($id);
        $products=Product::all();
        $suppliers=Supplier::all();
        return view('patches.editpatch',compact('suppliers',"products","patch"));

    }

   
    public function update(Request $request, $id)
    {
        $patch=Patch::find($id);
        $patch->name=$request->name;
        $patch->buying_price =$request->buying_price;
        $patch->count=$request->count;
        $patch->supplier_id=$request->supplier_id;
        $patch->product_id=$request->product_id;
      $patch->save();
    return redirect('/show-patch');

    }

    public function destroy($id)
    {
        $patch=Patch::find($id);
        $patch->delete();
        return redirect("/show-patch");

    }
}
