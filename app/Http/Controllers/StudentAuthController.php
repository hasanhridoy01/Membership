<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class StudentAuthController extends Controller
{   
    
    use AuthenticatesUsers;

    /**
     * Login Page Method
     */
    public function LoginPage()
    {
    	return view('student.login');
    }

    /**
     * Register Page Method
     */
    public function RegisterPage()
    {
    	return view('student.registation');
    }

    /**
     * Register Student Method
     */
    public function RegisterStudent(request $request)
    {
    	student::create([
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
        return Auth::guard('student');
    }
}
