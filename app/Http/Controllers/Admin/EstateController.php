<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = Estate::paginate(10);
        return view('admin.estate.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($slug)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estate = Estate::find($id);

        return view('admin.estate.show', compact('estate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'visible' => 'required',
        ]);
        
        $estate = Estate::find($id);

        if ($request->visible == '0' || $request->visible == '1') {
            $estate->update([
                'visible' => $request->visible,
            ]);
        }else{
            $estate->update([
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
        $estate = Estate::find($id);
        if ($estate->photo) {
            Storage::disk('public')->delete($estate->photo);
        }
        if ($estate->gallery) {
            foreach($estate->gallery as $value):
                Storage::disk('public')->delete($value);
            endforeach;
        }
        $estate->delete();
        return redirect()->route('admin.estates.index')->with('success', 'Ваши данные успешно удалены!');
    }
}
