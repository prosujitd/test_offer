<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Dashai',
                'expired_at' => '2024-09-06 12:06:12',
            ],
            [
                'name' => 'Tihar',
                'expired_at' => '2024-09-06 12:29:12',
            ],
            [
                'name' => 'Teej',
                'expired_at' => '2024-09-06 06:55:12',
            ],
            [
                'name' => 'Holi',
                'expired_at' => '2024-09-06 12:44:12',
            ],
            [
                'name' => 'New Year',
                'expired_at' => '2024-09-06 09:55:12',
            ],
            [
                'name' => 'Shivaratri',
                'expired_at' => '2024-09-06 14:33:12',
            ],
            [
                'name' => 'Gaijatra',
                'expired_at' => '2024-09-06 15:09:12',
            ]
        ];

        Offer::insert($data);
    }
}
