<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Core\Product;
use App\Models\Core\Patch;
use App\Models\Core\Supplier;
use App\Models\Core\Property;
use App\Models\Core\PatchPropertyValues;



class PropertyController extends Controller
{
        public function create()
    {
                $patches=Patch::all();
        $properties=Property::all();

        return view("Core.patches.addproperty",compact("patches","properties"));

    }

  
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
    ]);
        $property=new Property;
        $property->name=$request->name;
    


        $property->save();
        return back();
 }
    public function storeptch_property(Request $request ){
        $this->validate($request, [
        'value' => 'required|max:255',
        //id 
    ]);
        $property=new PatchPropertyValues;
        $property->name=$request->name;
        $property->value=$request->value;
        $property->property_id=$request->property_id ;
        $property->patch_id =$request->patch_id ;

        $property->save();
        return back();
 }

    public function show()
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
