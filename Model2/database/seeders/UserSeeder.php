<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    const MAX_RECORDS = 100;  // Số lượng bản ghi tối đa

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate bảng 'users' để xóa dữ liệu cũ trước khi chèn dữ liệu mới
        DB::table('users')->truncate();

        // Chèn bản ghi admin đầu tiên
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => Str::random(10),
                'age' => 30, // Thêm giá trị cho trường 'age'
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Chèn các bản ghi user từ 2 đến MAX_RECORDS
        for ($i = 2; $i <= self::MAX_RECORDS; $i++) {
            DB::table('users')->insert([
                [
                    'name' => 'user' . $i,
                    'email' => "user{$i}@gmail.com",  // Tạo email theo định dạng user2@gmail.com, user3@gmail.com,...
                    'email_verified_at' => now(),
                    'password' => Hash::make('123456'),  // Mật khẩu cho người dùng
                    'remember_token' => Str::random(10),
                    'age' => rand(18, 60),  // Tạo giá trị ngẫu nhiên cho trường 'age' từ 18 đến 60
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}
