<?php

namespace Database\Factories;

use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProvinceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'province_name' => $this->faker->unique()->city,
            'capital' => $this->faker->city,
            'local_language' => $this->faker->word,
            'island' => $this->faker->word,
            'population' => $this->faker->numberBetween(100000, 10000000),
            'ethnic' => $this->faker->word,
            'regional_house' => $this->faker->word,
            'regional_house_image' => $this->faker->imageUrl,
            'dance' => $this->faker->word,
            'dance_image' => $this->faker->imageUrl,
            'weapon' => $this->faker->word,
            'weapon_image' => $this->faker->imageUrl,
            'music' => $this->faker->word,
            'music_image' => $this->faker->imageUrl,
            'tradition' => $this->faker->sentence,
            'flash_info' => $this->faker->paragraph,
            // 'more_detail' => $this->faker->text,
        ];
    }
}
