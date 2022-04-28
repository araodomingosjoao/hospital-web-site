<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $employes = User::where('rule_id', 1)->orderBy('id', 'desc')->get();
        
        return view('admin.index', compact('employes'));
    }
}
