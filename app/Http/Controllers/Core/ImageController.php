<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Core\Image;
use App\Models\Core\Supplier;
use App\Models\Core\Product;
use App\Models\Core\ProductImage;

class ImageController extends Controller
{



    public function create()

    {
        $products=Product::all();
        $images=Image::all();
        return view('Core.products.addimage',compact('products','images'));

    }

   
    public function store(Request $request)
    {
        $filename=$request->file("image")->getClientOriginalName();
        $request->file('image')->move(public_path("/images/productimages"), $filename);//for public path 
        //$request->file('image')->storeAs("productimages", $filename);// for storage path with sympolic link.. 
        $image=new Image;

        $image->image=$request->image->getClientOriginalName();


        $image->save();
        return back();

    }


    public function show()
    {
       $images=Image::all();
        return view('Core.products.showimage',compact('images'));



    }

    public function edit($id)
    {
        $image=Image::find($id);
        return view('Core.products.editimage',compact('image'));

        
    }


    public function update(Request $request, $id)
    {
         $image=Image::find($id);
        $filename=$request->file("image")->getClientOriginalName();
        $request->file('image')->storeAs("image", $filename);

        $image->image=$request->image->getClientOriginalName();


        $image->save();
        return back();

    }

  
    public function destroy($id)
    {
        $image=Image::find($id);
        $image->delete();
        return redirect('/admin/show-image');

    }
        public function uploadproduct_image(Request $request){
        $products=Product::all();
        $images=Image::all();
        $services=Product_service::all();
        return view('Core.products.addproduct_image',compact('products',"images","services"));
    }
        public function createproduct_image(Request $request){
        $products=Product::all();
        $images=Image::all();
        $services=Product_service::all();
        return view('Core.products.addproduct_image',compact('products',"images","services"));
    }

           public function storeproduct_image(Request $request){

        $product=new ProductImage;
        $product->image_id =$request->image_id ;
        $product->product_id =$request->product_id ;

        $product->save();
        return back();

    }
}
