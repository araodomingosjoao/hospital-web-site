<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function formLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email'     => ['required', 'email'],
            'password'  => ['required', 'string'],
        ]);

        if ($validation->fails()) {
            
            return redirect()->back()->withErrors($validation->errors());
        }

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            
            return redirect()->back()->with('credentials_error', 'Erro ao iniciar sessão! Por favor verifique as suas credencias');
        }

        if (Auth::attempt($credentials)) {
            
            if (Auth::user()->rule_id == 1) {

                return redirect()->route('doctor.index');
            }

            if (Auth::user()->rule_id == 2) {

                return redirect()->route('patient.index');
            }

            if (Auth::user()->rule_id == 3) {

                return redirect()->route('admin.index');
            }
            
        }
    }
}
