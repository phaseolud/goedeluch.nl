<?php

namespace Database\Factories;

use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'slug' => $this->faker->slug(3),
            'steps' => $this->faker->paragraphs(4),
            'description' => $this->faker->paragraphs(3, true),
            'cooking_time_minutes' => $this->faker->numberBetween(1,100),
            'type' => $this->faker->randomElement(['vega', 'vlees', 'vis']),
            'user_id' => User::factory(),
            'approved' => $this->faker->boolean()

        ];
    }
}
