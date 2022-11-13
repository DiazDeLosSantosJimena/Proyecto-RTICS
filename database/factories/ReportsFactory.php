<?php

namespace Database\Factories;
use App\Models\directions;
use App\Models\users;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\reports>
 */
class reportsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'description' => $this->faker->text(),
                'status' => $this->faker->text(),
                'direction_id' => directions::all()->random()->id,
                'user_id' => users::all()->random()->id,

                
            ];
    }
}
