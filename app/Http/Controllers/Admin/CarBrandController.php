<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = CarBrand::all();
        return view('admin.car-brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.car-brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'photo' => 'image|nullable',
        ]);

        if($request->hasFile('photo')){
            $folder = date('Y-m-d');
            $photo = $request->file('photo')->store("image/{$folder}", 'public');
        }

       CarBrand::create([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $photo ?? null,
        ]);

        return redirect()->route('carBrands.index')->with('success', 'Ваши данные успешно сохранены!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarBrand $carBrand)
    {
        return view('admin.car-brand.show', compact('carBrand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarBrand $carBrand)
    {
        return view('admin.car-brand.edit', compact('carBrand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarBrand $carBrand)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'photo' => 'image|nullable',
        ]);

        $photo_old = $carBrand->photo;

        if($request->hasFile('photo')){
            if ($carBrand->photo) {
                Storage::disk('public')->delete($carBrand->photo);
            } 
            $folder = date('Y-m-d');
            $photo = $request->file('photo')->store("image/{$folder}", 'public');
        }

        $carBrand->update([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $photo ?? $photo_old,
        ]);

        return redirect()->route('carBrands.index')->with('success', 'Ваши данные успешно изменены!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarBrand $carBrand)
    {
        if ($carBrand->photo) {
            Storage::disk('public')->delete($carBrand->photo);
        }
        $carBrand->delete();

        return redirect()->route('carBrands.index')->with('success', 'Ваши данные успешно удалены!');
    }
}
