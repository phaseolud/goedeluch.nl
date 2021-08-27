<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Rating;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(3)->create();
         User::factory()->create(['name' => 'Loek van Leeuwen', 'email' => 'loekvanleeuwen@outlook.com', 'password' => bcrypt('loekvanleeuwen')]);
         $recipes = Recipe::factory(10)->hasRatings(2)
             ->hasAttached(Ingredient::factory(5), ['amount' => 100, 'unit' => 'ml'])->create();

    }
}
