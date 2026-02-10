<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;

class CarController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::paginate(10);
        return view('admin.car.index', compact('cars'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = Car::find($id);

        return view('admin.car.show', compact('car'));
    }

/**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'visible' => 'required',
        ]);
        
        $car = Car::find($id);

        if ($request->visible == '0' || $request->visible == '1') {
            $car->update([
                'visible' => $request->visible,
            ]);
        }else{
            $car->update([
                'visible' => '0',
            ]);            
        }

        return redirect()->back()->with('success', 'Статус заказа изменен!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        if ($car->photo) {
            Storage::disk('public')->delete($car->photo);
        }
        if ($car->gallery) {
            foreach($car->gallery as $value):
                Storage::disk('public')->delete($value);
            endforeach;
        }
        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Ваши данные успешно удалены!');
    }


}
