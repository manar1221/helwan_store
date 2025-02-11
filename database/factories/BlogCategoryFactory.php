<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=BlogCategory>
 */
class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $bcategory_name=$this->faker->unique()->words($nb=2,$asText = true);
        $slug = Str::slug($bcategory_name,'-');
        return [
            'name' => $bcategory_name,
            'slug' => $slug
        ];
    }
}
