<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RatingStars extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public float $averageRating;
    public function __construct($averageRating)
    {
        $this->averageRating = $averageRating ?? 0;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rating-stars');
    }
}
