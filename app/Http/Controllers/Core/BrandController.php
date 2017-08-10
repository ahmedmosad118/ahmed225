<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Core\CarBrand;


class BrandController extends Controller
{
       public function create()
    {
        $brands=CarBrand::all();
        return view('Core.brands.addbrand',compact('brands'));
 
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255'
    ]);
        $brand=new CarBrand;
        $brand->name=$request->name;
        $brand->save();
        return redirect("/show-brand");

    }

    public function show()
    {
            $brands=CarBrand::all();
            return view('Core.brands.showbrands',compact("brands"));

    }

  
    public function edit($id)
    {
        $brands=CarBrand::find($id);
        return view('Core.brands.editbrand',compact('brands'));

    }

    public function update(Request $request, $id)
    {
            
        $brand=CarBrand::find($id);
        $brand->name=$request->name;
        $brand->save();
        return redirect("/show-brand");
    }


    public function destroy($id){
        $brand=CarBrand::find($id);
        $brand->delete();
        return redirect("/show-brand");
    }

}
