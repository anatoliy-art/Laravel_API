<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
//use App\Enums\ServerStatus;
//use Illuminate\Validation\Rule;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Estate;
use App\Models\User;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $house = Estate::where(['user_id' => Auth::user()->id])->with(['category', 'floor', 'material', 'room', 'user'])->get();
        return view('account.estate.index', compact('house'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('account.estate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'floor' => 'required|integer',
            'room' => 'required|integer',
            'material' => 'required|integer',
            'categories' => 'required|integer',
            'title' => 'required|max:255',
            'description' => 'nullable',
            'photo' => 'image|nullable',
            'gallery' => 'max:4|nullable',
            'price' => 'nullable',
            'phone' => 'nullable|max:20|min:5',
        ]);

        //dd($request->all());
        $price = (int) $request->input('price');
        
        if($request->hasFile('photo')){
            $folder = date('Y-m-d');
            $photo = $request->file('photo')->store("image/{$folder}", 'public');
        }

        if($request->hasFile('gallery')){
            $folder = date('Y-m-d');
            foreach ($request->file('gallery') as $value) {
                $gallery[] = $value->store("image/{$folder}", 'public');
            }
        }

       $estate = Estate::create([
            'floor_id' => $request->floor,
            'room_id' => $request->room,
            'material_id' => $request->material,
            'category_id' => $request->categories,
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'price' => (int) $request->price,
            'phone' => $request->phone,
            'photo' => $photo ?? null,
            'gallery' => $gallery ?? null,
        ]);

        return redirect()->route('estates.index')->with('success', 'Ваши данные успешно сохранены!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estate $estate)
    {
        return view('account.estate.show', compact('estate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estate $estate)
    {
        return view('account.estate.edit', compact('estate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estate $estate)
    {
        $request->validate([
            'floor' => 'required|integer',
            'room' => 'required|integer',
            'material' => 'required|integer',
            'categories' => 'required|integer',
            'title' => 'required|max:255',
            'description' => 'nullable',
            'photo' => 'image|nullable',
            'gallery' => 'max:4|nullable',
            'price' => 'nullable',
            'phone' => 'nullable|max:20|min:5',
        ]);

        $photo_old = $estate->photo;
        $gallery_old = $estate->gallery;

        if($request->hasFile('photo')){
            if ($estate && $estate->photo) {
                Storage::disk('public')->delete($estate->photo);
            } 
            $folder = date('Y-m-d');
            $photo = $request->file('photo')->store("image/{$folder}", 'public');
        }

        if($request->hasFile('gallery')){

            if($gallery_old != null){
                foreach($gallery_old as $value):
                    Storage::disk('public')->delete($value);
                endforeach;                
            }

            $folder = date('Y-m-d');
            foreach ($request->file('gallery') as $value) {
                $gallery[] = $value->store("image/{$folder}", 'public');
            }
        }

        $estate->update([
            'floor_id' => $request->floor,
            'room_id' => $request->room,
            'material_id' => $request->material,
            'category_id' => $request->categories,
            'title' => $request->title,
            'description' => $request->description,
            'price' => (int) $request->price,
            'phone' => $request->phone,
            'photo' => $photo ?? $photo_old,
            'gallery' => $gallery ?? $gallery_old,
        ]);

        return redirect()->route('estates.index')->with('success', 'Ваши данные успешно изменены!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estate $estate)
    {
        if ($estate->photo) {
            Storage::disk('public')->delete($estate->photo);
        }
        if ($estate->gallery) {
            foreach($estate->gallery as $value):
                Storage::disk('public')->delete($value);
            endforeach;
        }
        $estate->delete();
        return redirect()->route('estates.index')->with('success', 'Ваши данные успешно удалены!');
    }
}
