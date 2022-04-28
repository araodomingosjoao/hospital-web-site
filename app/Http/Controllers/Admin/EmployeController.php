<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialties = Specialty::orderBy('name', 'asc')->get(); 

        return view('admin.create', compact('specialties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [

            'first_name'    => ['required', 'string'],
            'last_name'     => ['required', 'string'],
            'email'         => ['required', 'email'],
            'phone_number'  => ['required', 'integer'],
            'password'      => ['required', 'string', 'min:4'],
        ]);

        if ($validation->fails()) {
            
            return redirect()->back()->withErrors($validation->errors());
        }

        $user = new User();

        $user->rule_id = 1;
        $user->specialty_id = $request->specialty_id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;  
        $user->email = $request->email;      
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);   

        if ($user->save()) {
            
            return redirect()->route('admin.index')->with('employe_created', 'Doctor cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
    }
}
