<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('title','like', '%'. request('search') . '%')->get();
        return view('recipes.index', ['recipes' => $recipes]);
    }
}
