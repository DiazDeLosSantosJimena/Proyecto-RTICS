<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Directions>
 */
class DirectionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'teaching' => $this->faker->randomElement(['Docencia 1', 'Docencia 2','Docencia 3','Docencia 3A','Docencia 4','Docencia 5']),
            'career' => $this->faker->randomElement(['Carrera de tecnologías de la información y comunicación','Carrera de mecatrónica y de sistemas productivos','Carrera de negocios y gestión empresarial','Carrera de negocios y gestión empresarial','Carrera de protección civil y de enfermería','Carrera de tecnología ambiental y de mantenimiento industrial']),
            
        ];
    }
}
