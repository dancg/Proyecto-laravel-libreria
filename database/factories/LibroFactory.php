<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo'=>ucfirst($this->faker->words(3, true)),
            'resumen'=>$this->faker->text(),
            'pvp'=>$this->faker->randomFloat(2, 10, 999),
            'stock'=>$this->faker->numberBetween(1, 30),
            'user_id'=>User::all()->random()->id
        ];
    }
}
