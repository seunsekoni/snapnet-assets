<?php

namespace Database\Seeders;

use App\Models\OwnerType;
use Illuminate\Database\Seeder;

class OwnerTypeSeeder extends Seeder
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
                'name' => 'Individual',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Group',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        // create each item
        foreach($items as $item) {
            OwnerType::updateOrCreate([
                'id' => $item['id']
            ], $item);
        }
    }
}
