<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrdersModel;

class History extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrdersModel::create([
            'user_id' => 1,
            'order' => 'test',
            'status' => 'process',
        ]);
    }
}
