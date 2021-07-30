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

        if(in_array(request('type'), ['vega', 'vlees', 'vis'])) {
            $this->recipe = Recipe::where('type', request('type'))->inRandomOrder()->limit(1)->get()[0];
        }
        else {
            $this->recipe = Recipe::inrandomOrder()->limit(1)->get()[0];
        }
    }

    public function render()
    {
        return view('components.random-recipe');
    }
}
