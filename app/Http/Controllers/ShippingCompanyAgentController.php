<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping\ShippingCompany;
use App\Models\Shipping\ShippingCompanyAgent;



class ShippingCompanyAgentController extends Controller
{
        public function create()
    {
        $companies=ShippingCompany::all();    	
        return view('shippingcompanyagents.addagent',compact('companies'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'phone' => 'required|max:255',
        'job' => 'required|max:255',
        'email' => 'required|email',

    ]);

        $agents=new ShippingCompanyAgent;
        $agents->name=$request->name;
        $agents->email=$request->email;
        $agents->shipping_company_id=$request->shipping_company_id;
        $agents->phone=$request->phone;
        $agents->job=$request->job;
        $agents->save();
        return redirect('/show-shipping-company-agents');
    }

    public function show()
    {
        $agents=ShippingCompanyAgent::all();
        return view('shippingcompanyagents.showagents',compact('agents'));
    }

    public function edit($id)
    {
        $company=ShippingCompanyAgent::find($id);
        return view('shippingcompanyagents.editcompany',compact('company'));

    }


    public function update(Request $request, $id)

    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'website' => 'required|max:255'
    ]);
        $company=ShippingCompanyAgent::find($id);
        $company->name=$request->name;
        $company->website=$request->website;
        $company->save();
        return redirect('/show-shipping-companies');

        
    }

    
    public function destroy($id)
    {
        $company=ShippingCompanyAgent::find($id);
        $company->delete();
        return redirect('/show-shipping-companies');
    }


}
