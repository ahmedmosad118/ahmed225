<?php

namespace App\Http\Controllers\Shipping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipping\Client;
use App\Models\Shipping\Employee;
use App\Models\Shipping\ShippingCompany;
use App\Models\Shipping\ShippingCompanyAgent;
use App\Models\Shipping\Order;



class OrderController extends Controller
{
        public function create()
    {
    	$companies=ShippingCompany::all();
    	$clients=Client::all();
    	$employees=Employee::all();
        return view('Shipping.orders.addorder',compact('companies','clients','employees'));
 
    }

    public function store(Request $request)
    {
    	// dd($request->all());
        $this->validate($request, [
        // 'shipping_fees ' => 'required|max:255',
        'order_done_through' => 'required|max:255',


    ]);
        $order=new Order;
        $order->client_id=$request->client_id;
        $order->employee_id=$request->employee_id;
        $order->shipping_company_id =$request->shipping_company_id ;
        $order->note=$request->note;
        $order->order_done_through=$request->order_done_through;
        $order->shipping_fees=$request->shipping_fees;
        $order->save();
        return back();

    }

    public function show()
    {
            $clients=Client::all();
            return view('clients.showclients',compact("clients"));

    }

  
    public function edit($id)
    {
        $client=Client::find($id);
        return view('clients.editclient',compact('client'));

    }

    public function update(Request $request, $id)
    {
            
        $client=Client::find($id);
        $client->name=$request->name;
        $client->phone=$request->phone;
        $client->address=$request->address;
        $client->save();
        return redirect("/show-clients");
    }


    public function destroy($id){
        $client=Client::find($id);
        $client->delete();
        return redirect("/show-clients");
    }


}
