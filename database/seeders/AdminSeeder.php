<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            [
                'id' => 1,
                'nama' => 'Delila',
                'username' => '123456789',
                'password' => Hash::make('delila'),
                'updated_at' => NULL,
                'created_at' => NULL,
            ],
            [
                'id' => 2,
                'nama' => 'suma',
                'username' => '5002222111',
                'password' => '$2y$12$XDQ.O2rea94iVREQRVRQ.OAfvNz9wsRLqSoQIzACtxtY9nRiP8K12',
                'updated_at' => '2024-02-20 10:10:01',
                'created_at' => '2024-02-20 10:10:01',
            ],
            [
                'id' => 3,
                'nama' => 'lolo',
                'username' => '5009888777',
                'password' => '$2y$12$Mi15UbiYlxwkmbGWj9Z4jOJhhAdL2O7.tTRQFMnSAYyW0YTkdsZre',
                'updated_at' => '2024-02-20 10:16:23',
                'created_at' => '2024-02-20 10:16:23',
            ],
            [
                'id' => 4,
                'nama' => 'saa',
                'username' => '5009888776',
                'password' => '$2y$12$QrV76fv0ZYraTbuQyMGM3.fEFOSBlxIyjonX2t3P.MPWS4oS9rCmu',
                'updated_at' => '2024-02-20 10:34:30',
                'created_at' => '2024-02-20 10:34:30',
            ],
        ]);
    }
}
