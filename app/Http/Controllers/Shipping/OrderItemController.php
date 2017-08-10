<?php

namespace App\Http\Controllers\Shipping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipping\Order;

use App\Models\Core\Patch;


class OrderItemController extends Controller
{

       public function create()
    {
        $patches=Patch::all();
        $orders=Order::all();
        return view('Shipping.orderitems.addorderitem',compact('patches','orders'));
 
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255'
    ]);
        $client=new Client;
        $client->name=$request->name;
        $client->phone=$request->phone;
        $client->address=$request->address;
        $client->save();
        return redirect("/show-clients");

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
