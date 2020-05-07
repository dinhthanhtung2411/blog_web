<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('signin.register');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->fill($request->input());
        $user->password = Hash::make($request->password);
        $user->save();

        $alert = 'Created an account successful!';
        return back()->with('alert', $alert);
    }
}
