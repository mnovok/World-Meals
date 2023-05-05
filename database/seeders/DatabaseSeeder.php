<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Category::factory(10)->create();
        \App\Models\Ingredients::factory(10)->create();
        \App\Models\Tags::factory(10)->create();
        \App\Models\Meals::factory(10)->create();
        \App\Models\MealsTags::factory(10)->create();
        \App\Models\MealsTranslation::factory(10)->create();
    }
}
