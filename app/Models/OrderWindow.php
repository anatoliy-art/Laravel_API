<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderWindow extends Model
{
    use HasFactory;

    protected $fillable = ['window_id', 'title', 'width', 'height', 'material', 'hutters', 'price', 'material_price', 'time_price', 'visible', 'status', 'phone', 'address'];

    public function window()
    {
      return $this->belongsTo(Window::class);
    }

}
