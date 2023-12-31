<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\DB;

use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use Illuminate\Support\Facades\Hash;




class adminLoginController extends Controller
{
    public function adminLogin()
    {
        return view('HomePage.Admin.adminLogin');
    }


    public function adminLoginPost(Request $request)
    {
        $credetails = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        $admin = DB::table('users')
            ->where('email', $credetails['email'])
            ->first();



            if ($admin) {

                if (Hash::check($credetails['password'], $admin->password)) {
                      session()->put('loginname', $admin->name);


                    $name = session('loginname');

                return redirect('/')->with('success', 'Login Successfully');

                } else {
                    return back()->with('error', 'Email or Password is invalid');
                }
            } else {
                return back()->with('error', 'Email or Password is invalid');
            }

    }


    public function adminLogout()
    {

        if (session()->has('loginname')) {
            session()->pull('loginname');
            return redirect('adminLogin');
        }
    }
}
