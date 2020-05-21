<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestRegister;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('signin.register');
    }

    public function register(RequestRegister $request)
    {
        $user = new User();
        $user->fill($request->input());
        $user->password = Hash::make($request->password);
        $user->save();

        $alert = 'Created an account successful!';


        return redirect()->route('signin')->with(compact('alert'));
    }
}
