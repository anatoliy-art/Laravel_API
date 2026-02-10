<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::where(['user_id' => Auth::user()->id])->get();
        return view('account.car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('account.car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|integer',
            'title' => 'required|max:255',
            'description' => 'nullable',
            'year' => 'required|date_format:Y',
            'year' => 'required|integer|max:' . Carbon::now()->year,
            'engine' => 'required|integer|max:1000',
            'mileage' => 'required|integer|min:0',
            'photo' => 'image|nullable',
            'gallery' => 'max:4|nullable',
            'price' => 'nullable',
            'phone' => 'nullable|max:20|min:5',
        ]);

        //dd((int) $request->brand);
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

        Car::create([
            'brand_id' => (int) $request->brand,
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'year' => $request->year,
            'engine' => $request->engine,
            'mileage' => $request->mileage,
            'price' => (int) $request->price,
            'phone' => $request->phone,
            'photo' => $photo ?? null,
            'gallery' => $gallery ?? null,
        ]);

        return redirect()->route('cars.index')->with('success', 'Ваши данные успешно сохранены!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('account.car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('account.car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'required|integer',
            'title' => 'required|max:255',
            'description' => 'nullable',
            'year' => 'required|date_format:Y',
            'year' => 'required|integer|max:' . Carbon::now()->year,
            'engine' => 'required|integer|max:1000',
            'mileage' => 'required|integer|min:0',
            'photo' => 'image|nullable',
            'gallery' => 'max:4|nullable',
            'price' => 'nullable',
            'phone' => 'nullable|max:20|min:5',
        ]);

        $photo_old = $car->photo;
        $gallery_old = $car->gallery;

        if($request->hasFile('photo')){
            if ($car && $car->photo) {
                Storage::disk('public')->delete($car->photo);
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

        $car->update([
            'brand_id' => (int) $request->brand,
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'year' => $request->year,
            'engine' => $request->engine,
            'mileage' => $request->mileage,
            'price' => (int) $request->price,
            'phone' => $request->phone,
            'photo' => $photo ?? $photo_old,
            'gallery' => $gallery ?? $gallery_old,
        ]);

        return redirect()->route('cars.index')->with('success', 'Ваши данные успешно изменены!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        if ($car->photo) {
            Storage::disk('public')->delete($car->photo);
        }
        if ($car->gallery) {
            foreach($car->gallery as $value):
                Storage::disk('public')->delete($value);
            endforeach;
        }
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Ваши данные успешно удалены!');
    }
}
