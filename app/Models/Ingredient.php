<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    public $guarded = [];
    protected $appends = ['amount', 'unit'];
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class)->withPivot(['amount', 'unit']);
    }

    public function getAmountAttribute()
    {
        return $this->pivot->amount;
    }

    public function getUnitAttribute()
    {
        return $this->pivot->unit;
    }
}
