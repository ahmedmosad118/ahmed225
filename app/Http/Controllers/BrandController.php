<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Core\CarBrand;
use App\Models\Core\CarEdition;
use App\Models\Core\CarModel;
use App\Models\Core\Image;
use App\Models\Core\Supplier;
use App\Models\Core\ProductService;
use App\Models\Core\ProductType;
use App\Models\Core\Product;
use App\Models\Core\ProductImage;
use App\Models\Core\ProductServiceRecord;


class BrandController extends Controller
{

    public function index()
    {
       
    }

    
    public function create()
    {
        $brands=CarBrand::all();
        return view('brands.addbrand',compact('brands'));
 
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
            return view('brands.showbrands',compact("brands"));

    }

  
    public function edit($id)
    {
        $brands=CarBrand::find($id);
        return view('brands.editbrand',compact('brands'));

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
