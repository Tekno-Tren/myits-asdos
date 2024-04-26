<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            [
                'rekap_nilai' => 1,
                'filename' => 'sertifikat.pdf',
                'original_name' => 'sertifikat.pdf',
                'file_path' => 'uploads/sertifikat.pdf',
                'user_id' => 11,
                'kelas_id' => 1,
                'created_at' => '2024-02-18 20:50:27',
                'updated_at' => '2024-02-18 20:50:27',
            ],
            [
                'rekap_nilai' => 2,
                'filename' => 'Form 2 Learning Agreement.pdf',
                'original_name' => 'Form 2 Learning Agreement.pdf',
                'file_path' => 'uploads/Form 2 Learning Agreement.pdf',
                'user_id' => 11,
                'kelas_id' => 1,
                'created_at' => '2024-02-18 21:02:49',
                'updated_at' => '2024-02-18 21:02:49',
            ],
            [
                'rekap_nilai' => 1,
                'filename' => 'lamp.pdf',
                'original_name' => 'lamp.pdf',
                'file_path' => 'uploads/lamp.pdf',
                'user_id' => 19,
                'kelas_id' => 10,
                'created_at' => '2024-02-19 00:56:39',
                'updated_at' => '2024-02-19 00:56:39',
            ],
        ]);
    }
}
