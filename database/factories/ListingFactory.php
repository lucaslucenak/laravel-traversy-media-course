<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, api, backend',
            'company_name' => $this->faker->company(),
            'description' => $this->faker->paragraph(5),
            'email' => $this->faker->email(),
            'location' => $this->faker->locale(),
            'website' => $this->faker->url()
        ];
    }
}
