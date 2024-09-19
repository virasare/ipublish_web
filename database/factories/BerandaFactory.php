<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beranda>
 */
class BerandaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "file" => $this->faker->filePath(),
            "title"=> fake()->sentence(),
            "slug"=> Str::slug(fake()->sentence()),
            "body"=> fake()->text()
        ];
    }
}
