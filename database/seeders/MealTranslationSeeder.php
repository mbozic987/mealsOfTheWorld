<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        for($i=1;$i<=6;$i++){
            DB::table('meal_translations')->insert([
                'title' => 'Naslov za ' . $i . '. jelo',
                'meal_id' => $i,
                'locale' => 'hr',
            ]);
        }

        for($i=1;$i<=5;$i++){
            DB::table('meal_translations')->insert([
                'title' => 'Title for ' . $i . '. meal',
                'meal_id' => $i,
                'locale' => 'en',
            ]);
        }
        
    } 
}
