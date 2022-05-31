<?php

namespace Database\Seeders;

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
        $this->call(LanguageSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TagTranslationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CategoryTranslationSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(IngredientTranslationSeeder::class);
        $this->call(MealSeeder::class);
        $this->call(MealTranslationSeeder::class);
        $this->call(IngredientMealSeeder::class);
        $this->call(MealTagSeeder::class);
    }
}
