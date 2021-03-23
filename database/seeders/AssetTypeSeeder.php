<?php

namespace Database\Seeders;

use App\Models\AssetType;
use Illuminate\Database\Seeder;

class AssetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Fixed',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Liquid',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        // 
        foreach($items as $item) {
            AssetType::updateOrCreate([
                'id' => $item['id']
            ], $item);
        }

    }
}
