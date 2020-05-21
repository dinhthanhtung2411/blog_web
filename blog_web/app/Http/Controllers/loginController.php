<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequsetFormSignin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('signin.signin');
    }

    public function signin(RequsetFormSignin $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $remember = $request->remember;

        if (Auth::attempt($data, $remember)){
            if (Auth::user()->role == RoleConstant::ADMIN) {
                return redirect('/admin');
            }
            return redirect('/');
        }
        return back()->with('\'wrong\', "Wrong password! Try again!"');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/signin');
    }
}
