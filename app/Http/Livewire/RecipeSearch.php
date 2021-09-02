<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RecipeSearch extends Component
{
    public string $search;
    public function mount()
    {
        $this->search = "";
    }
    public function render()
    {
        return view('livewire.recipe-search', ['recipes' => Recipe::where('title','like', '%'. $this->search . '%')->approved()->get()]);
    }
}
