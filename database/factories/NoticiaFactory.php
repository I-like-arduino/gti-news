<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'Titulo' => fake()->sentence(),
            'resumo' => fake()->paragraph(1),
            'conteudo' => fake()->paragraph(10),
            'data' => fake()->dateTimeThisYear(),
            'capa' => fake()->imageUrl(),
            'user_id' => 1,
        ];
    }
}