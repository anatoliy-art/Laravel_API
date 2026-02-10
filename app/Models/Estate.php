<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Support\Str;

class Estate extends Model
{
    use HasFactory;

    protected $fillable = ['floor_id', 'room_id', 'material_id', 'category_id', 'user_id', 'title', 'description', 'photo', 'gallery', 'price', 'phone', 'visible'];

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

    protected $casts = [
        'gallery' => 'array'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class);
    }

    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class);
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
