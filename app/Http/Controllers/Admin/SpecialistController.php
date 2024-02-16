<?php

namespace App\Http\Controllers\Admin;

use App\Models\Specialist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SpecialistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialists = Specialist::orderBy('name', 'asc')->paginate(10);
        return view('admin.specialists.index', compact('specialists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.specialists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:specialists',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);


        $slug = Str::slug($request->name, '-');
        $image = $request->file('image');
        $image->storeAs('public/specialists', $image->hashName());

        Specialist::create([
            'name' => $request->name,
            'image' => $image->hashName(),
            'slug' => $slug,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.specialists.index')->with('success', 'Specialist created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $specialist = Specialist::where('slug', $slug)->firstOrFail();
        return view('admin.specialists.show', compact('specialist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $specialist = Specialist::where('slug', $slug)->firstOrFail();
        return view('admin.specialists.edit', compact('specialist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'name' => 'required|unique:specialists,name,' . $slug . ',slug',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $specialist = Specialist::where('slug', $slug)->firstOrFail();

        $specialist->name = $request->name;
        $specialist->description = $request->description;

        if ($request->hasFile('image')) {
            // Delete previous image if exists
            $image = $request->file('image');
            $image->storeAs('public/specialists', $image->hashName());

            //delete old image
            Storage::delete('public/specialists/' . $specialist->image);
            $specialist->image = $image->hashName();

        }

        $specialist->save();

        return redirect()->route('admin.specialists.index')->with('success', 'Specialist updated successfully.');

    }


    /**
     * Remove the specified resource from storage.
     */
    function destroy(string $slug)
    {
        $specialist = Specialist::where('slug', $slug)->firstOrFail();
        // Hapus gambar dari storage jika ada
        if ($specialist->image) {
            Storage::delete('public/specialists/' . $specialist->image);
        }

        $specialist->delete();

        return redirect()->route('admin.specialists.index')->with('success', 'Specialist deleted successfully.');
    }
}
