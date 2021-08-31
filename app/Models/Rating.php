<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['rating', 'guest_ip'];
    public function recipe()
    {
        $this->belongsTo(Recipe::class);
    }
}
