<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{   

    use AuthenticatesUsers;


    /**
     * Login Page Show Method
     */
    public function LoginPage()
    {
    	return view('admin.login');
    }

    /**
     * Register Page Method
     */
    public function RegisterPage()
    {
    	return view('admin.registation');
    }

    /**
     * Register Admin Method
     */
    public function RegisterAdmin(request $request)
    {
    	Admin::create([
            'name'  => $request -> name,
            'uname'  => $request -> uname,
            'email'  => $request -> email,
            'cell'  => $request -> cell,
            'password'  => Hash::make($request -> password),
    	]);

    	return redirect() -> back();
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }


}
