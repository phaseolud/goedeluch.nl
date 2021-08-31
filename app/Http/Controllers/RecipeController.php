<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('title','like', '%'. request('search') . '%')->approved()->get();
        return view('recipes.index', ['recipes' => $recipes]);
    }

    public function show(Recipe $recipe)
    {
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
        $validated['user_id'] = auth()->id() ?? null;
        $validated['image'] = $request->file('image')->store('images');

        $recipe = Recipe::create(Arr::except($validated,['name', 'amount', 'unit', 'g-recaptcha-response']));

        foreach ($validated['name'] as $index=>$ingredient)
        {
            $ingredient_id = Ingredient::firstOrCreate(['name' => $ingredient]);
            $recipe->ingredients()->attach($ingredient_id, ['amount' => $validated['amount'][$index], 'unit' => $validated['unit'][$index]]);
        }
        return redirect(route('home'))->with('success', 'Dank je wel voor jouw recept! Het recept zal eerst worden gecontroleerd en daarna worden toegevoegd aan de website');
    }

    public function edit(Recipe $recipe)
    {
        $steps_object = Collection::empty();
        foreach ($recipe->steps as $step)
        {
            $steps_object->add(['description' =>$step]);
        }
        $recipe->steps = $steps_object;
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    public function update(StoreRecipeRequest $request, Recipe $recipe)
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['title']);

        if (isset($validated['image']))
        {
            $validated['image'] = $request->file('image')->store('images');
        }

        $recipe->update(Arr::except($validated, ['name', 'amount', 'unit', 'g-recaptcha-response']));

        $recipe->ingredients()->detach();
        foreach ($validated['name'] as $index=>$ingredient)
        {
            $ingredient_id = Ingredient::firstOrCreate(['name' => $ingredient]);
            $recipe->ingredients()->attach($ingredient_id, ['amount' => $validated['amount'][$index], 'unit' => $validated['unit'][$index]]);
        }
        return redirect(route('home'))->with('success', 'Het recept is succesvol geupdated');
    }
}
