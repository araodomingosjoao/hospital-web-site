<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function formRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validation = Validator::make($request->all(), [

            'first_name'    => ['required', 'string'],
            'last_name'     => ['required', 'string'],
            'email'         => ['required', 'email'],
            'phone_number'  => ['required', 'integer'],
            'password'      => ['required', 'string', 'confirmed', 'min:4'],
        ]);

        if ($validation->fails()) {
            
            return redirect()->back()->withErrors($validation->errors());
        }

        $user = new User();

        $user->rule_id = 2;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;  
        $user->email = $request->email;      
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);   

        if ($user->save()) {
            
            return redirect()->route('auth.login')->with('user_created', 'Conta criada com sucesso! <br> Inicia sessão para continua.');
        }
    }
}
