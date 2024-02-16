<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technician;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technicians = Technician::orderBy('name', 'asc')->paginate(10);
        return view('admin.technicians.index', compact('technicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technicians.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:technicians',
            'password' => 'required|min:6', // menambahkan validasi untuk password
            'email_verified_at' => 'nullable|date', // menambahkan validasi untuk email_verified_at
            'phone' => 'nullable|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $slug = Str::slug($request->name, '-');
        $image = $request->file('image');
        $image->storeAs('public/technicians', $image->hashName());

        Technician::create([
            'name' => $request->name,
            'slug' => $slug,
            'email' => $request->email,
            'email_verified_at' => $request->email_verified_at,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'image' => $image->hashName(),
        ]);

        return redirect()->route('admin.technicians.index')->with('success', 'Technician created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $technician = Technician::where('slug', $slug)->firstOrFail();
        return view('admin.technicians.show', compact('technician'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $technician = Technician::where('slug', $slug)->firstOrFail();
        return view('admin.technicians.edit', compact('technician'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:technicians,email,' . $slug . ',slug',
            'password' => 'nullable|min:6', // tambahkan validasi untuk password
            'email_verified_at' => 'nullable|date', // tambahkan validasi untuk email_verified_at
            'phone' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $technician = Technician::where('slug', $slug)->firstOrFail();

        $technician->name = $request->name;
        $technician->email = $request->email;
        $technician->phone = $request->phone;

        // Cek apakah ada perubahan password
        if ($request->filled('password')) {
            $technician->password = Hash::make($request->password);
        }

        // Cek apakah ada perubahan tanggal verifikasi email
        if ($request->filled('email_verified_at')) {
            $technician->email_verified_at = now(); // Atau atur tanggal yang sesuai dengan input pengguna
        }

        if ($request->hasFile('image')) {
            // Delete previous image if exists
            $image = $request->file('image');
            $image->storeAs('public/technicians', $image->hashName());

            // Delete old image
            if ($technician->image) {
                Storage::delete('public/technicians/' . $technician->image);
            }

            $technician->image = $image->hashName();
        }

        $technician->save();

        return redirect()->route('admin.technicians.index')->with('success', 'Technician updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $technician = Technician::where('slug', $slug)->firstOrFail();

        if ($technician->image) {
            Storage::delete('public/technician/' . $technician->image);
        }

        $technician->delete();

        return redirect()->route('admin.technicians.index')->with('success', 'Technician deleted successfully.');
    }
}
