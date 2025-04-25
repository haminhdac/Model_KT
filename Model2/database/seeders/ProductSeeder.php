<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    const MAX_RECORDS = 100;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < self::MAX_RECORDS; $i++) {
            DB::table('products')->insert([
                [
                        'name' => 'product '.$i,
                        'image' => 'product.jpg',
                        'price' =>  rand(100000, 9999999),
                        'quanity' =>  rand(1, 100),
                        'description' => 'iPhone 14 ProMax sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic',
                        'created_at' => now(),
                        'updated_at' => now(),
            ],
            ]);
        }


    }
}