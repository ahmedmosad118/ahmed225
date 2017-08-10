<?php

namespace App\Http\Controllers\Shipping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipping\Order;
use App\Models\Shipping\OrderStatuse;


class OrderStatuseController extends Controller
{

        public function create()

    {
        return view('Shipping.orders.addstatuse');
 
    }

    public function store(Request $request)
    {
        $this->validate($request, [
       'note' => 'required|max:255',
        'name' => 'required|max:255',


    ]);
        $statuse=new OrderStatuse;
        $statuse->name =$request->name ;
        $statuse->note=$request->note;
        $statuse->save();
        return redirect("/show-order-statuses");

    }

    public function show()
    {
            $statuses=OrderStatuse::all();
            return view('Shipping.orders.showstatuses',compact("statuses"));

    }

  
    public function edit($id)
    {
            $statuse=OrderStatuse::find($id);
        return view('Shipping.orders.editstatuse',compact('statuse'));

    }

    public function update(Request $request, $id)
    {
            
        $statuse=OrderStatuse::find($id);
        $statuse->name =$request->name ;
        $statuse->note=$request->note;
        $statuse->save();
        return redirect("/show-order-statuses");
    }


    public function destroy($id){
        $statuse=OrderStatuse::find($id);
        $statuse->delete();
        return redirect("/show-order-statuses");
    }

}
