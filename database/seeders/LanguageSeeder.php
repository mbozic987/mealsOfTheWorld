<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $language = [
            ['language' => 'English', 'code' => 'en'],
            ['language' => 'Hrvatski', 'code' => 'hr']   
        ];

        foreach ($language as $lang) {
            DB::table('languages')->insert([
                'language' => $lang['language'],
                'short' => $lang['code']
            ]);
        }
    }
}
