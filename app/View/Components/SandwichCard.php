<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SandwichCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $recipe;

    public function __construct($recipe)
    {
        $this->recipe = $recipe;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sandwich-card');
    }
}
