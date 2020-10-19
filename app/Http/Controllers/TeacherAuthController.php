<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class TeacherAuthController extends Controller
{   
    
    use AuthenticatesUsers;

    /**
     * Login Page Method
     */
    public function LoginPage()
    {
    	return view('teacher.login');
    }

    /**
     * Register Page Method
     */
    public function RegisterPage()
    {
    	return view('teacher.registation');
    }

    /**
     * Register Teacher Method
     */
    public function RegisterTeacher(request $request)
    {
    	Teacher::create([
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
        return Auth::guard('teacher');
    }
}
