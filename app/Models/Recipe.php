<?php

namespace App\Models;

use App\Scopes\ApprovedScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;


    public $guarded = [];
    protected $casts = ['steps' => 'array'];


    public function scopeApproved($query)
    {
        return $query->where('approved', 1);
    }

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

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->withPivot(['amount', 'unit']);
    }


}
