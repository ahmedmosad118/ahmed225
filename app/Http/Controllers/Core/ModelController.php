<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Core\CarBrand;
use App\Models\Core\CarEdition;
use App\Models\Core\CarModel;


class ModelController extends Controller
{
        public function create($id)
    {
       $brand=CarBrand::find($id);
    return view('Core.models.addmodel',compact("brand"));

    }

  

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255'
    ]);
        
        $model=new CarModel;
        $model->name=$request->name;
        $model->car_brand_id =$request->car_brand_id;
        $model->save();
        return redirect('/show-model/'.$model->brand->id);

    }

   
    public function show($id)
    {
            $brands=CarBrand::find($id);
            $models=CarModel::all();
            return view('Core.models.showmodels',compact("brands","models"));

    }

 
    public function edit($id)
    {
        $brands=CarBrand::all();
        $model=CarModel::find($id);
        return view('Core.models.editmodel',compact('brands','model'));

    }

   
    public function update(Request $request, $id)
    {
       $model=CarModel::find($id);
        $model->name=$request->name;
        $model->car_brand_id =$request->car_brand_id;

       
       $model->save();
        return redirect('/show-model/'.$model->brand->id);
    }

   
    public function destroy($id)
    {
        $model=CarModel::find($id);
        $model->delete();
        return redirect('/show-model/'.$model->brand->id);

    }

}
