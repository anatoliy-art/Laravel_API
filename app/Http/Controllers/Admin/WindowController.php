<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Window;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WindowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $windows = Window::all();
        return view('admin.window.index', compact('windows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.window.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'material' => 'string|max:255',
            'hutters' => 'nullable|integer',
            'photo' => 'nullable|image',
        ]);

        if($request->hasFile('photo')){
            $folder = date('Y-m-d');
            $photo = $request->file('photo')->store("image/{$folder}", 'public');
        }

       Window::create([
            'title' => $request->title,
            'description' => $request->description,
            'material' => $request->material,
            'hutters' => $request->hutters,
            'photo' => $photo ?? null,
        ]);

        return redirect()->route('windows.index')->with('success', 'Ваши данные успешно сохранены!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Window $window)
    {
        return view('admin.window.show', compact('window'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Window $window)
    {
        return view('admin.window.edit', compact('window'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Window $window)
    {

        $validate = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'material' => 'string|max:255',
            'hutters' => 'nullable|integer',
            'photo' => 'nullable|image',
        ]);

        $photo_old = $window->photo;

        if($request->hasFile('photo')){
            if ($window->photo) {
                Storage::disk('public')->delete($window->photo);
            } 
            $folder = date('Y-m-d');
            $photo = $request->file('photo')->store("image/{$folder}", 'public');
        }

        $window->update([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'material' => $validate['material'],
            'hutters' => $validate['hutters'],
            'photo' => $photo ?? $photo_old,
        ]);

        return redirect()->route('windows.index')->with('success', 'Ваши данные успешно изменены!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Window $window)
    {
        if ($window->photo) {
            Storage::disk('public')->delete($window->photo);
        }
        $window->delete();

        return redirect()->route('windows.index')->with('success', 'Ваши данные успешно удалены!');
    }
}
