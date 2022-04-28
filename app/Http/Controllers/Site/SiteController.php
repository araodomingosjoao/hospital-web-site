<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }
    public function about()
    {
        return view('site.about');
    }
    public function contacts()
    {
        return view('site.contacts');
    }
    public function doctors()
    {
        $specialties = Specialty::orderBy('name', 'asc')->get();
        
        return view('site.doctors', compact('specialties'));
    }
    public function marking(Specialty $specialty)
    {
        return view('site.marking', compact('specialty'));
    }
    public function services()
    {
        return view('site.services');
    }
}
