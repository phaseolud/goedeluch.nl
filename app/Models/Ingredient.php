<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    public $guarded = [];
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class)->withPivot(['amount', 'unit']);
    }
}