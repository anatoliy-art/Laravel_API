<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Window extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'material', 'hutters', 'photo'];

    protected static function booted()
    {
        static::creating(function ($model) {
            $slug = Str::slug($model->title);
            $originalSlug = $slug;
            $count = 1;

            // Проверка на уникальность
            while ($model::where('slug', $slug)->exists()) {
                $slug = "{$originalSlug}-" . $count++;
            }

            $model->slug = $slug;
        });
    }

    public function windowOrders()
    {
      return $this->hasMany(OrderWindow::class);
    }

}

