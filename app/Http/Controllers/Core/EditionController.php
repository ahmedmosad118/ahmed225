<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Core\CarBrand;
use App\Models\Core\CarEdition;
use App\Models\Core\CarModel;


class EditionController extends Controller
{
        public function create($id)
    {
               $model=CarModel::find($id);
               return view('Core.editions.addedition',compact("model"));

    }

    
    public function store(Request $request)
    {
  
        $edition=new CarEdition;
        $edition->name=$request->name;
        $edition->car_model_id=$request->car_model_id;
        $edition->year_from =$request->year_from;
        $edition->year_to =$request->year_to;
        $edition->save();
        return redirect('/show-edition/'.$edition->model->id);

    }

    public function show($id)
    {
        $model=CarModel::find($id);
        $editions=CarEdition::all();
        return view('Core.editions.showeditions',compact("editions","model"));

        
    }


    public function edit($id)
    {
        $edition=CarEdition::find($id);
        $models=CarModel::all();
        return view('Core.editions.editedition',compact("edition",'models'));



    }

  
    public function update(Request $request, $id)
    {
        $edition=CarEdition::find($id);


        $edition->name=$request->name;
        $edition->car_model_id=$request->car_model_id;
        $edition->year_from =$request->year_from;
        $edition->year_to =$request->year_to;
        $edition->save();
        return redirect('/show-edition/'.$edition->model->id);

    }


    public function destroy($id)
    {
        $edition=CarEdition::find($id);
        $edition->delete();
        return redirect('/show-edition/'.$edition->model->id);

    }

}
