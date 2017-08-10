<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Core\ProductService;
use App\Models\Core\ProductType;
use App\Models\Core\Product;
use App\Models\Core\ProductImage;
use App\Models\Core\ProductServiceRecord;

class ServiceController extends Controller
{

    public function create()

    {
                $products=Product::all();
                $services=ProductService::all();
                return view('Core.products.addservice',compact('products','services'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255',

    ]);
        $service=new ProductService;
        $service->name=$request->name;

        $service->save();
        return redirect('/show-service');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
            $services=ProductService::all();
            return view('Core.products.showservices',compact("services"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=ProductService::find($id);
        return view('Core.products.editservice',compact('service'));

    }


    public function update(Request $request, $id)
    {

        $service=ProductService::find($id);
                $this->validate($request, [
        'name' => 'required|max:255',

    ]);
        $service=ProductService::find($id);

        $service->name=$request->name;

        $service->save();
        return back();


    }


    public function destroy($id)
    {
        $service=ProductService::find($id);
        $service->delete();
        return redirect('/show-service');


     }
        public function storeproduct_service(Request $request){
                  $this->validate($request, [
        'price' => 'required'
       

    ]);

        $product=new ProductServiceRecord;
        $product->product_service_id=$request->product_service_id  ;
        $product->price =$request->price ;
        $product->product_id =$request->product_id ;

        $product->save();
        return back();
    }


}
