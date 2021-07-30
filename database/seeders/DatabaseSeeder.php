<?php

namespace Database\Seeders;

use App\Models\Rating;
use App\Models\Recipe;
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
         $recipes = Recipe::factory(10)->create();
         $recipe_ids = $recipes->pluck('id');
         foreach ($recipe_ids as $rid){
             Rating::factory(2)->create(['recipe_id' => $rid]);
         }
    }
}
