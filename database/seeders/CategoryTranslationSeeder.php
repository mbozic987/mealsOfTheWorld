<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        for($i=1;$i<=5;$i++){
            DB::table('category_translations')->insert([
                'title' => 'Naslov za ' . $i . '. kategoriju',
                'category_id' => $i,
                'locale' => 'hr',
            ]);
        }

        for($i=1;$i<=5;$i++){
            DB::table('category_translations')->insert([
                'title' => 'Title for ' . $i . '. category',
                'category_id' => $i,
                'locale' => 'en',
            ]);
        }
        
    } 
}
