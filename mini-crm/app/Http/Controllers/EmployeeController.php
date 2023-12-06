<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Employee::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('first_name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('last_name', 'like', '%' . $searchTerm . '%');
        }

        $employees = $query->paginate(10);

        return view('HomePage.Employee.Employee', compact('employees'));
    }


    public function show(Request $request){

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('HomePage.Employee.CreatEmployee');
    }


    public function store(EmployeeRequest $request)
    {

        $employee = $request->validated();
        $company = Company::firstOrCreate(['name' => $request->input('company_name')]);

        $employee = new Employee([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        $employee->company()->associate($company);
        $employee->save();

        Alert::success('Success', 'Employee Added!')->persistent(true)->autoClose(3000);
        return redirect('employees')->with('success', 'Employee created successfully');
    }



    public function edit(string $id)
    {
        $data= Employee::findOrFail($id);

        return view('HomePage.Employee.EditEmployee')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, string $id)
    {

        $employee = $request->validated();
        $employee = Employee::findOrFail($id);


        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');


        $company = Company::firstOrCreate(['name' => $request->input('company_name')]);


        $employee->company()->associate($company);
        $employee->save();
        Alert::success('Success', 'Employee updated!')->persistent(true)->autoClose(3000);
        return redirect('employees')->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);

        Alert::success('Success', 'Employee Deleted!')->persistent(true)->autoClose(3000);
        return redirect('employees')->with('success','Employee deleted!');
    }
}
