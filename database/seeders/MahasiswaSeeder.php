<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 6; $i++) {
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'nrp' => $faker->unique()->numerify('##########'),
                'email' => $faker->unique()->email,
                'jurusan' => $faker->randomElement(['Matematika', 'Arsitektur', 'Teknik Sipil', 'Teknik Mesin', 'Teknik Elektro']),
                'gambar' => 'diva.jpg', // Sesuaikan dengan nama gambar yang dimiliki
            ]);
        }
    }
}
