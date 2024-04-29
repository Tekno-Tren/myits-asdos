<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuktifotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buktifoto')->insert([
            [
                'filename' => '0f628447d8e6fc879d889966c9c4c7dcc0fa780c9dab9c7bef3387a85acaf6a0.png',
                'original_name' => 'Screenshot (8).png',
                'file_path' => 'uploads/EMup8FA2RqJlLZhNHLqkkbNBjjT0wUuFFWmB74I9.png',
                'user_id' => 11,
                'pertemuan_id' => 4,
                'created_at' => '2024-02-18 10:04:38',
                'updated_at' => '2024-02-18 10:04:38',
            ],
            [
                'filename' => '07105976b51e37a310f2185bd2df7b2104043107f0922424ccec8733fe9ccd48.png',
                'original_name' => 'tdc.png',
                'file_path' => 'uploads/u71VgEWn50dR4Lshmd6tyK0l67jnoiv0hhkG6C0K.png',
                'user_id' => 19,
                'pertemuan_id' => 5,
                'created_at' => '2024-02-18 23:51:12',
                'updated_at' => '2024-02-18 23:51:12',
            ],
            [
                'filename' => 'b4761827e3e2195449d2a3e4f609b1b689128f6811c9b24d02017b05a25b4c03.png',
                'original_name' => 'Screenshot (1).png',
                'file_path' => 'uploads/PaiyC9002X6bD8U5PrevMfAEuRCT8bWsnJEU8ZIv.png',
                'user_id' => 11,
                'pertemuan_id' => 1,
                'created_at' => '2024-02-22 06:17:09',
                'updated_at' => '2024-02-22 06:18:06',
            ],
            [
                'filename' => 'b3b8e5f5d20c00844ffd93b10f2f16369310ff3d49e39aa143486fad25e3d422.png',
                'original_name' => 'Screenshot (829).png',
                'file_path' => 'uploads/Unr38e1vYcQfNoPOLCZ8cDlcnj4H8APyaxdDjmu7.png',
                'user_id' => 11,
                'pertemuan_id' => 3,
                'created_at' => '2024-02-22 19:19:56',
                'updated_at' => '2024-02-22 19:19:56',
            ],
            [
                'filename' => 'cc7e93e9bacc61ee393edf5e8368f4912658802e6cd1d2435dd457be170d8478.png',
                'original_name' => 'PicsArt_08-29-01.05.42.png',
                'file_path' => 'uploads/R1doSt7xh4CHXZaPOJY9dFSF4xZ4IWd8jefGlE0w.png',
                'user_id' => 11,
                'pertemuan_id' => 2,
                'created_at' => '2024-02-23 10:33:24',
                'updated_at' => '2024-02-23 10:33:24',
            ],
        ]);
    }
}
