<?php

namespace App\View\Components;

use App\Models\Recipe;
use Illuminate\View\Component;

class RandomRecipe extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public $recipe;

    public function __construct()
    {
        $type = in_array(request('type'), ['vega', 'vlees', 'vis']) ? request('type') : false;
        $this->recipe = Recipe::when($type, function ($query, $type) {
            return $query->where('type', $type);
        })->inRandomOrder()->limit(1)->get();
    }

    public function render()
    {
        return view('components.random-recipe');
    }
}
