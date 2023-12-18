<?php

namespace Database\Factories;

use App\Models\Galerie;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalerieFactory extends Factory
{
    protected $model = Galerie::class;

    public function definition(): array
    {
        return [
            'id' => null,
            'name' => $this->faker->sentence(),
            'images' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
        ];
    }
}