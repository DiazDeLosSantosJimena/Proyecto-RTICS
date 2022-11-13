<?php

namespace Database\Factories;
use App\Models\directions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classrooms>
 */
class ClassroomsFactory extends Factory
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
            'direction_id' => directions::all()->random()->id,
    
            ];
    }
}
