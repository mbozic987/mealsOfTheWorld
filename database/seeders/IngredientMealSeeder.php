<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IngredientMealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=6;$i++){
            for($j=1;$j<=rand(1,10);$j++){
                DB::table('ingredients_meals')->insert([
                    'meal_id' => $i,
                    'ingredient_id' => $j
                ]);
            }
        }
    }
}
