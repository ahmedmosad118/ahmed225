<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Core\Supplier;


class SupplierController extends Controller
{
  
    public function index()
    {
        
    }

    public function create()
    {
               return view("suppliers.addsuplier");
    }



    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'phone' => 'required|max:12',
        'address' => 'required'

    ]);
        $supplier=new Supplier;
        $supplier->name=$request->name;
        $supplier->phone =$request->phone;
        $supplier->address=$request->address;


        $supplier->save();
        return redirect('/show-supplier');

    }

  
    public function show()
    {
                $suppliers=Supplier::all();
                return view('suppliers.showsuppliers',compact("suppliers"));

    }
        public function show_supplier($id)
    {
                $supplier=Supplier::find($id);
                return view('suppliers.showsupplier',compact("supplier"));

    }


    
    public function edit($id)
    {
                $supplier=Supplier::find($id);
     
        return view('suppliers.editsupplier',compact('supplier'));

    }


    public function update(Request $request, $id)
    {
        $supplier=Supplier::find($id);
        $supplier->name=$request->name;
        $supplier->phone =$request->phone;
        $supplier->address=$request->address;

        $supplier->save();
        return redirect("/show-supplier");
    }

    public function destroy($id)
    {
        $supplier=Supplier::find($id);
        $supplier->delete();
        return redirect("/show-supplier");

    }
}
