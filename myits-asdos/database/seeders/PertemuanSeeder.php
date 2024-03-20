<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PertemuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 5; $i++) {
            DB::table('pertemuan')->insert([
                'tanggal' => $faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d'),
                'jam' => $faker->time('H:i:s'),
                'tempat' => $faker->sentence(2),
                'status_kehadiran' => $faker->randomElement([0, 1, 2, 3]),
                'kelas_id' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d H:i:s'),
            ]);
        }
    }
}

