<?php

namespace App\Http\Controllers\Shipping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipping\ShippingCompany;
use App\Models\Shipping\ShippingCompanyAgent;


class ShippingCompanyAgentController extends Controller
{

        public function create()
    {
        $companies=ShippingCompany::all();    	
        return view('Shipping.shippingcompanyagents.addagent',compact('companies'));
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
        return view('Shipping.shippingcompanyagents.showagents',compact('agents'));
    }

    public function edit($id)
    {
        $agent=ShippingCompanyAgent::find($id);
        $companies=ShippingCompany::all();      
        return view('Shipping.shippingcompanyagents.editagent',compact('companies','agent'));

    }


    public function update(Request $request, $id)

    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'phone' => 'required|max:255',
        'job' => 'required|max:255',
        'email' => 'required|email',
    ]);
        $agent=ShippingCompanyAgent::find($id);
        $agent->name=$request->name;
        $agent->email=$request->email;
        $agent->shipping_company_id=$request->shipping_company_id;
        $agent->phone=$request->phone;
        $agent->job=$request->job;
        $agent->save();
        return redirect('show-shipping-companpy-agents');

        
    }

    
    public function destroy($id)
    {
        $agent=ShippingCompanyAgent::find($id);
        $agent->delete();
        return redirect('/show-shipping-companpy-agents');
    }


}
