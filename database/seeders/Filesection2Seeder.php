<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Filesection2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filesection2')->insert([
            ['file' => 'matsisssss.pdf'],
            ['file' => 'lamp.pdf'],
            ['file' => 'matsisssss.pdf'],
        ]);
    }
}
