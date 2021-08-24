<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('title','like', '%'. request('search') . '%')->get();
        return view('recipes.index', ['recipes' => $recipes]);
    }

    public function show(Recipe $recipe)
    {
        Gate::authorize('approved', $recipe);
        return view('recipes.show', ['recipe' => $recipe]);
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(StoreRecipeRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['title']);
        $validated['user_id'] = auth()->id();
        $validated2 = ['title' => 'test 123', 'slug' => 'a-slug', 'user_id' => 14, 'cooking_time_minutes' => 12, 'steps' => ['step 1', 'step 2'], 'type'=> 'vega'];
        $recipe = Recipe::create(Arr::except($validated,['name', 'amount', 'unit']));
        $ingredient_ids = [];
        foreach ($validated['name'] as $index=>$ingredient)
        {
            $ingredient_id = Ingredient::firstOrCreate(['name' => $ingredient]);
            $recipe->ingredients()->attach($ingredient_id, ['amount' => $validated['amount'][$index], 'unit' => $validated['unit'][$index]]);
        }
        return redirect(route('home'))->with('success', 'Dank je wel voor je recept! Het recept zal eerst worden gecontroleerd en daarna worden toegevoegd aan de website');
    }
}
