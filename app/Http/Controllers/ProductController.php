<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Core\CarBrand;
use App\Models\Core\CarEdition;
use App\Models\Core\CarModel;
use App\Models\Core\ProductService;
use App\Models\Core\ProductType;
use App\Models\Core\Product;
use App\Models\Core\ProductImage;
use App\Models\Core\ProductServiceRecord;


class ProductController extends Controller
{
 
    public function index()
    {
        return view('admin');


    }



    public function create()
    {
        $brands=CarBrand::all();
        $editions=CarEdition::all();
        $models=CarModel::all();
        $types=ProductType::all();
        return view('products.addproduct',compact('types',"editions",'brands','models'));
    }

  
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
        // 'selling_price ' => 'required|min:2|numeric',
        'description' => 'required',

    ]); 
        $product=new Product;
        $product->name=$request->name;
        $product->selling_price=$request->selling_price;
        $product->description=$request->description;
        $product->product_type_id =$request->product_type_id ;
        $product->car_brand_id =$request->car_brand_id ;
        $product->car_model_id =$request->car_model_id ;
        $product->car_edition_id =$request->car_edition_id ;
        $product->save();
        return redirect('/show-product');
        return redirect('/show-product');
    }


    public function show()
    {
                $products=Product::all();
                return view('products.showproducts',compact("products"));

    }
    public function show_product($id)
    {
       $products=Product::find($id);
       return view('products.showproduct',compact("products"));

    }


    public function edit($id)
    {
        $product=Product::find($id);   
        $brands=CarBrand::all();
        $editions=CarEdition::all();
        $models=CarModel::all();
        $types=ProductType::all();
        return view('products.editproduct',compact('types',"editions",'brands','models',"product"));

    }

  
    public function update(Request $request,  $id)
    {
       
       $product=Product::find($id);
        $product->name=$request->name;
        $product->selling_price=$request->selling_price;
        $product->description=$request->description;
        $product->product_type_id =$request->product_type_id ;
        $product->car_brand_id =$request->car_brand_id ;
        $product->car_model_id =$request->car_model_id ;
        $product->car_edition_id =$request->car_edition_id ;
        $product->save();
        return redirect('/show-product');

    }

    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('/show-product');    

    }
}
