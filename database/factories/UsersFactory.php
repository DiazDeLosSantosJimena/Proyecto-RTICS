<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\directions;
use App\Models\typeofusers;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'name' => $this->faker->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'signature' => 'https://placeimg.com/100/100/any?' . rand(1, 100),
                'direction_id' => directions::all()->random()->id,
                'typeofuser_id' => typeofusers::all()->random()->id,
            ];
    }
}

