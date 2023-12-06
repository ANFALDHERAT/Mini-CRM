<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
class CompanyController extends Controller
{

    public function index(Request $request)
    {
        $query = Company::query();
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }
        $company = $query->paginate(10);

        return view('HomePage.Company.Company', compact('company'));
    }

    public function create()
    {
        return view('HomePage.Company.CreatCompany');
    }

    public function store(CompanyRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $uploadedFile = $request->file('logo');
            $filename = time() . '.' . $uploadedFile->getClientOriginalExtension();
            $filePath = 'assets/img/' . $filename; 

            $uploadedFile->move(public_path('assets/img/'), $filename);

            $data['logo'] = $filePath;
        }

        Company::create($data);

        Alert::success('Success', 'Company Added!')->persistent(true)->autoClose(3000);
        return redirect('companies')->with('success', 'Company Added!');
    }

    public function edit($id)
    {
        $data=Company::find($id);
        return view('HomePage.Company.EditCompany')->with('data',$data);
    }

    public function update(CompanyRequest $request, $id)
    {

        $data = $request->validated();

        $data['name'] = $request->name;
        $data['email'] = $request->email;

        $filename = '';

        if ($request->hasFile('logo')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('/assets/img/'), $filename);
            $data['logo'] = $filename;
        } else {
            unset($data['logo']);
        }

        Company::where(['id' => $id])->update($data);

        Alert::success('Success', 'Company Updated!!')->persistent(true)->autoClose(3000);
        return redirect('companies')->with('success', 'Updated!');
    }

    public function destroy($id)
    {
        Company::destroy($id);

        Alert::success('Success', 'Company Deleted!')->persistent(true)->autoClose(3000);
        return redirect('companies')->with('success', 'Deleted!');
    }

    public function getAllCompanies()
    {
        $companies = Company::all();
        return response()->json(['companies' => $companies], 200);
    }

    public function getCompanyWithEmployees($id)
    {
        $company = Company::find($id);
        // dd($company);
        return response()->json(['company' => $company], 200);
    }
}
