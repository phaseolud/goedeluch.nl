<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RandomRecipe extends Component
{
    public $recipe;
    public $type;
    public $listeners = ['setType' => '$refresh'];

    public function setType($type)
    {
        $this->type = $type;
        $this->recipe = $this->loadRecipe();
    }
    public function mount()
    {
        $this->type = false;
        $this->recipe = $this->loadRecipe();
    }

    public function loadRecipe()
    {
       return Recipe::when($this->type, function ($query, $type) {
            return $query->where('type', $type);
        })->approved()->inRandomOrder()->first();
    }
    public function render()
    {
        return view('livewire.random-recipe', ['recipe' => $this->recipe]);
    }
}
