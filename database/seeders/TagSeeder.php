<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=1;$i<=5;$i++){
            DB::table('tags')->insert([
                'slug' => 'tagSlug' . $i
            ]);
        }
        
    }  
}
