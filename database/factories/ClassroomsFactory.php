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
            'name' => $this->faker->randomElement(['Aula 101','Aula 405','Aula 503','Aula 204','Aula 305','Aula 104','Aula 401','Aula 505','Aula 202','Aula 303']),    
    
            ];
    }
}
