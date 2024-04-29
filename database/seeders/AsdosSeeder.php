<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AsdosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $kelas = ['Kalkulus', 'Fisika', 'Matematika', 'Kimia', 'Elektro', 'Sipil', 'Mesin'];

        foreach ($kelas as $nama_kelas) {
            for ($i = 0; $i < 50; $i++) {
                DB::table('asdos')->insert([
                    'kelas' => $nama_kelas . ' ' . ($i + 1),
                    'nama' => $faker->name,
                    'nrp' => $faker->unique()->numerify('##########')
                ]);
            }
        }
    }
}
