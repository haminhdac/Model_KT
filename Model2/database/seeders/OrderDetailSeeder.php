<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderDetailSeeder extends Seeder
{
    const MAX_RECORDS = 100;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < self::MAX_RECORDS; $i++) {
            DB::table('order_details')->insert([
                [
                        'order_id' => $i,
                        'product_id' => rand(1,99),
                        'quanity' => rand(1,50),
                        'notes' => 'Không',
                        'created_at' => now(),
                        'updated_at' => now(),
            ],
            ]);
        }


    }
}