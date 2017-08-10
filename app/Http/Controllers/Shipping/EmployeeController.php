<?php

namespace App\Http\Controllers\Shipping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipping\Employee;


class EmployeeController extends Controller
{

    public function index()

    {
        
    }

    
    public function create()
    {
        return view('Shipping.employees.addemployee');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'phone' => 'required|max:255',
        'email' => 'required|email'
    ]);

        $employees=new Employee;
        $employees->name=$request->name;
        $employees->email=$request->email;
        $employees->phone=$request->phone;
        $employees->save();
        return redirect('/show-employees');
    }

 
    public function show()
    {
        $employees=Employee::simplePaginate(15);
        return view('Shipping.employees.showemployees',compact('employees'));
    }

    public function edit($id)
    {
        $employee=Employee::find($id);
        return view('Shipping.employees.editemployee',compact('employee'));

    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'name' => 'required|email'
    ]);
        
        $employee=Employee::find($id);
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->save();
        return redirect('/show-employees');

        
    }

    
    public function destroy($id)
    {
        $employee=Employee::find($id);
        $employee->delete();
        return redirect('/show-employees');
    }

}
