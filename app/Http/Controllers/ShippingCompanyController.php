<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping\ShippingCompany;

class ShippingCompanyController extends Controller
{
    public function create()
    {
        return view('shippingcompany.addcompany');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companies=new ShippingCompany;
        $companies->name=$request->name;
        $companies->website=$request->website;
        $companies->save();
        return redirect('/show-shipping-companies');
    }

    public function show()
    {
        $companies=ShippingCompany::simplePaginate(15);
        return view('shippingcompany.showcompanies',compact('companies'));
    }

    public function edit($id)
    {
        $company=ShippingCompany::find($id);
        return view('shippingcompany.editcompany',compact('company'));

    }


    public function update(Request $request, $id)
    {
        $company=ShippingCompany::find($id);
        $company->name=$request->name;
        $company->website=$request->website;
        $company->save();
        return redirect('/show-shipping-companies');

        
    }

    
    public function destroy($id)
    {
        $company=ShippingCompany::find($id);
        $company->delete();
        return redirect('/show-shipping-companies');
    }
}

