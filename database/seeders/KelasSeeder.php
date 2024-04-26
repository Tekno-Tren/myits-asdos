<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            [
                'nama' => 'Kalkulus 1 (20)',
                'nama_dosen' => 'Bu Hani',
                'semester' => 'ganjil',
                'tahun' => 2024,
                'user_id' => 11,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'nama' => 'Fisika A',
                'nama_dosen' => 'Pak Joko',
                'semester' => 'genap',
                'tahun' => 2024,
                'user_id' => 8,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'nama' => 'Fisika B',
                'nama_dosen' => 'Bu Sinta',
                'semester' => 'genap',
                'tahun' => 2024,
                'user_id' => 11,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'nama' => 'Fisika C',
                'nama_dosen' => 'Bu Lala',
                'semester' => 'ganjil',
                'tahun' => 2024,
                'user_id' => 10,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'nama' => 'Kimia A',
                'nama_dosen' => 'Bu Nanda',
                'semester' => 'genap',
                'tahun' => 2024,
                'user_id' => 10,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'nama' => 'Kimia B',
                'nama_dosen' => 'Pak Jarwo',
                'semester' => 'ganjil',
                'tahun' => 2024,
                'user_id' => 9,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'nama' => 'Kimia C',
                'nama_dosen' => 'Pak Adit',
                'semester' => 'genap',
                'tahun' => 2024,
                'user_id' => 8,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'nama' => 'Pemrograman AA',
                'nama_dosen' => 'Pak Abdi',
                'semester' => 'ganjil',
                'tahun' => 2024,
                'user_id' => 19,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'nama' => 'Kimia 1',
                'nama_dosen' => 'Asep',
                'semester' => 'genap',
                'tahun' => 2024,
                'user_id' => 9,
                'created_at' => '2024-02-22 05:06:10',
                'updated_at' => '2024-02-23 09:59:52',
            ],
            [
                'nama' => 'Biologi',
                'nama_dosen' => 'Bu Sol',
                'semester' => 'genap',
                'tahun' => 2024,
                'user_id' => 11,
                'created_at' => '2024-02-23 03:43:50',
                'updated_at' => '2024-02-23 09:59:33',
            ],
        ]);
    }
}
