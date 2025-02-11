<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $blog_name=$this->faker->unique()->words($nb=6,$asText = true);
        $slug = Str::slug($blog_name,'-');
        return [
            'name'=>$blog_name,
            'slug'=>$slug,
            'short_description'=>$this->faker->text(200),
            'description'=>$this->faker->text(500),
            'image'=>'blog-'.$this->faker->numberBetween(1,16),
            'category_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}
