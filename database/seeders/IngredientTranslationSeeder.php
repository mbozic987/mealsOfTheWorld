<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        for($i=1;$i<=10;$i++){
            DB::table('ingredient_translations')->insert([
                'title' => 'Naslov za ' . $i . '. sastojak',
                'ingredient_id' => $i,
                'locale' => 'hr',
            ]);
        }

        for($i=1;$i<=10;$i++){
            DB::table('ingredient_translations')->insert([
                'title' => 'Title for ' . $i . '. ingredient',
                'ingredient_id' => $i,
                'locale' => 'en',
            ]);
        }
        
    } 
}
