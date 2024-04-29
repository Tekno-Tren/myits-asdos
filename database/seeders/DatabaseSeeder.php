<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use File;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            AsdosSeeder::class,
            UsersSeeder::class,
            KelasSeeder::class,
            PertemuanSeeder::class,
            BuktifotoSeeder::class,
            MateriSeeder::class,
            Filesection2Seeder::class,
            MahasiswaSeeder::class,
            SectionSeeder::class,
        ]);
    }
}
