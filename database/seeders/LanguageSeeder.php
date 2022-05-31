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
            ['language' => 'English', 'lang_code' => 'en'],
            ['language' => 'Hrvatski', 'lang_code' => 'hr']   
        ];

        foreach ($language as $lang) {
            DB::table('languages')->insert([
                'language' => $lang['language'],
                'lang_code' => $lang['lang_code']
            ]);
        }
    }
}
