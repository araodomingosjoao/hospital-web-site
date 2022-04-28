<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $consultations = Consultation::orderBy('created_at', 'asc')->get();

        return view('patient.index', compact('consultations'));
    }
}
