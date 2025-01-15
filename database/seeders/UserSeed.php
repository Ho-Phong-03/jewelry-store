<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('12345'), // Mật khẩu được mã hóa
                'images' => '', // Hình ảnh của admin (có thể để trống hoặc chỉ định tên file)
                'phone' => '0123456789',
                'address' => '123 Admin Street, City, Country',
                'birthday' => '1990-01-01', // Ngày sinh
                'gender' => '1', // 1 là Nam, 2 là Nữ
                'role' => 'admin', // Quyền admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('12345'), // Mật khẩu được mã hóa
                'images' => '', // Hình ảnh của test user
                'phone' => '0987654321',
                'address' => '456 Test Avenue, City, Country',
                'birthday' => '1995-05-15', // Ngày sinh
                'gender' => '2', // 1 là Nam, 2 là Nữ
                'role' => 'customer', // Quyền khách hàng
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
