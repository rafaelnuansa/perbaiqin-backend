<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use App\Models\Technician;
use Illuminate\Http\Request;

class AskTechnicianController extends Controller
{
    public function index()
    {
        // get technician many consultation and random
        $technicians = Technician::take(8)->get();
        $specialists = Specialist::orderBy('name')->take(4)->get();
        return view('landing.ask-techinician.index', compact('specialists', 'technicians'));
    }

    public function show($slug)
    {
        $technician = Technician::where('slug', $slug)->first();
        // dd($technician);
        return view('landing.ask-techinician.show', compact('technician'));
    }
}
