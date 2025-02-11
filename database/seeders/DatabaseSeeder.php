<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\BlogCategory::factory(6)->create();
        \App\Models\Blog::factory(16)->create();
        //\App\Models\Category::factory(6)->create();
        //\App\Models\Product::factory(16)->create();
        //\App\Models\User::factory(10)->create();
    }
}
