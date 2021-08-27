<?php

namespace App\View\Components;

use App\Models\Recipe;
use App\Scopes\ApprovedScope;
use Illuminate\View\Component;

class NotApprovedRecipeTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $recipes;


    public function __construct()
    {
        $this->recipes = Recipe::withoutGlobalScope(ApprovedScope::class)->paginate(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.not-approved-recipe-table');
    }
}
