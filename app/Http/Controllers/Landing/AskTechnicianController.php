<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use App\Models\Technician;
use Illuminate\Http\Request;

class AskTechnicianController extends Controller
{

    public function index(Request $request)
    {
        $searchQuery = $request->input('search');

        $technicians = Technician::query();
        if ($searchQuery) {
            $technicians->where('name', 'like', '%' . $searchQuery . '%')
                ->orWhereHas('specialists', function ($query) use ($searchQuery) {
                    $query->where('name', 'like', '%' . $searchQuery . '%');
                });
        }

        $technicians = $technicians->paginate(8);
        $specialists = Specialist::orderBy('name')->take(4)->get();

        return view('landing.ask-techinician.index', compact('specialists', 'technicians'));
    }


    public function show($slug)
    {
        if (!auth()->guard('web')->check()) {
            return redirect()->route('login')->with('error', 'Please login before ask techcians');
        }
        $technician = Technician::where('slug', $slug)->first();
        return view('landing.ask-techinician.show', compact('technician'));
    }
}
