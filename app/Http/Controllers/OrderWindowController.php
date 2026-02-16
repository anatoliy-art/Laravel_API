<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderWindow;

class OrderWindowController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function orderCreate(Request $request, $window_id)
    {
        $validate = $request->validate([
            'title' => 'required|max:255',
            'width' => 'required|integer',
            'height' => 'required|integer',
            'material' => 'required|string|max:255',
            'hutters' => 'required|integer',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

       OrderWindow::create([
            'window_id' => (int) $window_id,
            'title' => $validate['title'],
            'title' => $validate['title'],
            'width' => $validate['width'],
            'height' => $validate['height'],
            'material' => $validate['material'],
            'hutters' => $validate['hutters'],
            'phone' => $validate['phone'],
            'address' => $validate['address'],
        ]);

        return redirect()->back()->with('success', 'Ваш заказ принят, вскоре менеджер свяжеться с Вами!');
    }

}
