<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Typeofusers>
 */
class TypeofusersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'name' =>  $this->faker->randomElement(['Director','Profesor de tiempo completo','Empleado de mantenimiento','Administrador']),
            ];
    }
}
