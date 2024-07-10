<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doce>
 */
class DoceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => $this->faker->domainName(),
            "preco" => $this->faker->numberBetween(6, 10000),
            "qtd_disponivel" => $this->faker->numberBetween(1, 100),
            "tipo_qtd" => $this->faker->randomElement(['kg', 'g', 'und', 'litro']),
            //"categoria_id" => Categoria::all()->random()->id
        ];
    }
}
