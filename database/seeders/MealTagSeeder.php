<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MealTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=6;$i++){
            for($j=1;$j<=rand(1,5);$j++){
                DB::table('meals_tags')->insert([
                    'meal_id' => $i,
                    'tag_id' => $j
                ]);
            }
        }
    }
}
