<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class StaffAuthController extends Controller
{   
	use AuthenticatesUsers;

    /**
     * Login Page Method
     */
    public function LoginPage()
    {
    	return view('staff.login');
    }

    /**
     * Login Register Method
     */
    public function LoginRegister()
    {
    	return view('staff.registation');
    }

    /**
     * Register Staff Method
     */
    public function RegisterStaff(request $request)
    {
    	Staff::create([
            'name' => $request -> name,
            'uname' => $request -> uname,
            'email' => $request -> email,
            'cell' => $request -> cell,
            'password' => Hash::make($request -> password),
    	]);

    	return redirect() -> back();
    }

    protected function guard()
    {
        return Auth::guard('staff');
    }
}
