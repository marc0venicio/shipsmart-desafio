<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "cep" => '69088438',
            "nome" => fake()->name(),
            "estado" => fake()->state(),
            "cidade" => fake()->city(),
            "bairro" => fake()->streetSuffix(),
            "rua" => fake()->streetAddress(),
            "numero" => 272,
        ];
    }
}
