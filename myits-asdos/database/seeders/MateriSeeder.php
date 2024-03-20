<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materi')->insert([
            [
                'materi' => 'aljabar linier',
                'user_id' => 11,
                'kelas_id' => 10,
                'pertemuan_id' => 5,
                'updated_at' => '2024-02-18 20:50:54',
                'created_at' => '2024-02-18 07:38:11',
            ],
            [
                'materi' => 'kompresi data',
                'user_id' => 11,
                'kelas_id' => 5,
                'pertemuan_id' => 4,
                'updated_at' => '2024-02-18 08:24:14',
                'created_at' => '2024-02-18 07:40:26',
            ],
            [
                'materi' => 'numerik analisis',
                'user_id' => 11,
                'kelas_id' => 1,
                'pertemuan_id' => 1,
                'updated_at' => '2024-02-21 20:21:37',
                'created_at' => '2024-02-18 08:30:59',
            ],
            [
                'materi' => 'komunikasi data',
                'user_id' => 11,
                'kelas_id' => 1,
                'pertemuan_id' => 2,
                'updated_at' => '2024-02-18 08:31:35',
                'created_at' => '2024-02-18 08:31:27',
            ],
            [
                'materi' => 'analis data',
                'user_id' => 19,
                'kelas_id' => 10,
                'pertemuan_id' => 3,
                'updated_at' => '2024-02-18 23:50:16',
                'created_at' => '2024-02-18 23:49:58',
            ],
            [
                'materi' => 'algorithm',
                'user_id' => 11,
                'kelas_id' => 5,
                'pertemuan_id' => 5,
                'updated_at' => '2024-02-22 19:19:28',
                'created_at' => '2024-02-22 19:19:28',
            ],
        ]);
    }
}


