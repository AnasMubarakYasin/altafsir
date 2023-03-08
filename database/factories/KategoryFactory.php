<?php

namespace Database\Factories;

use App\Models\Kategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kategory>
 */
class KategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Kategory::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
