<?php

namespace App\Http\Livewire;

use App\Models\Rating;
use App\Models\Recipe;
use Livewire\Component;

class RateRecipe extends Component
{
    public Recipe $recipe;

    public function mount(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    public function setRating(int $rating)
    {
        $this->recipe->ratings()->create(['rating' => $rating, 'guest_ip' => \Request::ip()]);
    }

    public function render()
    {
        return view('livewire.rate-recipe', ['already_rated' => $this->recipe->ratings()->where('guest_ip', \Request::ip())->exists()]);
    }
}
