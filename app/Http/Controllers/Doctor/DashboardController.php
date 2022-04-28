<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $consultations = Consultation::where('doctor_id', Auth::user()->id)->orderBy('created_at', 'asc')->get();

        return view('doctor.index', compact('consultations'));
    }
}
