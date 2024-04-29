<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array of common Indonesian names
        $names = [
            'Budi', 'Susi', 'Joko', 'Ani', 'Dewi', 'Agus', 'Rini', 'Hadi', 'Lina', 'Rudi',
            'Rina', 'Eko', 'Linda', 'Hendra', 'Maya', 'Yanto', 'Dini', 'Tono', 'Sari', 'Hadi',
            'Nina', 'Maman', 'Desi', 'Adi', 'Nani', 'Feri', 'Wati', 'Dodi', 'Nita', 'Andi',
            'Rini', 'Herman', 'Siska', 'Ridwan', 'Rita', 'Roni', 'Rima', 'Anto', 'Merry', 'Dian'
        ];

        // Generate and insert 50 user records
        for ($i = 0; $i < 50; $i++) {
            $name = $names[array_rand($names)];

            DB::table('users')->insert([
                'nama' => $name,
                'username' => '505099900' . ($i + 1),
                'departemen' => $this->generateRandomDepartemen(),
                'telp' => $this->generateRandomPhoneNumber(),
                'bank' => 'Bank ' . $this->generateRandomBank(),
                'norek' => $this->generateRandomRekeningNumber(),
                'nik' => $this->generateRandomNIK(),
                'alamat' => $this->generateRandomAddress(),
                'password' => bcrypt('password'), // Default password is 'password'
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Generate a random departemen.
     *
     * @return string
     */
    private function generateRandomDepartemen()
    {
        $departemen = ['Kalkulus', 'Fisika', 'Matematika', 'Kimia', 'Elektro', 'Sipil', 'Mesin'];
        return $departemen[array_rand($departemen)];
    }

    /**
     * Generate a random phone number.
     *
     * @return string
     */
    private function generateRandomPhoneNumber()
    {
        return '08' . mt_rand(100000000, 999999999);
    }

    /**
     * Generate a random bank.
     *
     * @return string
     */
    private function generateRandomBank()
    {
        $banks = ['BCA', 'BNI', 'BRI', 'Mandiri', 'CIMB Niaga'];
        return $banks[array_rand($banks)];
    }

    /**
     * Generate a random bank account number.
     *
     * @return string
     */
    private function generateRandomRekeningNumber()
    {
        return '1234567890' . mt_rand(1000, 9999);
    }

    /**
     * Generate a random NIK (Nomor Induk Kependudukan).
     *
     * @return string
     */
    private function generateRandomNIK()
    {
        return '35' . mt_rand(100000000, 999999999) . mt_rand(10, 99);
    }

    /**
     * Generate a random address.
     *
     * @return string
     */
    private function generateRandomAddress()
    {
        $streets = ['Jl. Ahmad Yani', 'Jl. Sudirman', 'Jl. Pahlawan', 'Jl. Diponegoro', 'Jl. Gajah Mada'];
        $cities = ['Jakarta', 'Bandung', 'Surabaya', 'Semarang', 'Yogyakarta'];
        return $streets[array_rand($streets)] . ', ' . $cities[array_rand($cities)];
    }
}
