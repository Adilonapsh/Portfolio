<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'app_name' => $this->faker->name(),
            'app_icon' => $this->faker->imageUrl(),
            'app_url' => $this->faker->url(),
            'app_url_fork' => $this->faker->url(),
            'app_photos' => $this->faker->imageUrl(),
            'short_desc' => $this->faker->text(),
            'desc' => $this->faker->paragraph(),
            'tags' => json_encode(["website", "hardware", "arduino"]),
            'feature' => json_encode(["php", "laravel", "node js", "html"]),
            'slug' => Str::slug($this->faker->name()),
            'visible_in_landing' => true,
            'link_to_app' => true,
        ];
    }
}
