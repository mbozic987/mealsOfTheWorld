<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i=5;$i++){
            if($i=0){
                DB::table('meals')->insert([
                    'category_id' => 0,
                ]);
            }else{
                DB::table('meals')->insert([
                    'category_id' => $i,
                ]);
            }
        }
    }
}
