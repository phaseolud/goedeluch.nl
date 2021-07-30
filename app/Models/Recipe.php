<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public $guarded = [];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRating()
    {
        return $this->hasOne(Rating::class)->selectRaw('recipe_id, avg(*) as aggregate')->groupBy('recipe_id');
    }

    public function getAverageRatingAttribute()
    {
        return $this->ratings()->average('rating');
    }

    public function getIsVegeratianAttribute()
    {
        return $this->type == 'vegetarian';
    }

}
