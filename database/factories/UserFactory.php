<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(), // Tên ngẫu nhiên
            'email' => fake()->unique()->safeEmail(), // Email ngẫu nhiên
            'password' => bcrypt('12345'), // Mật khẩu mặc định mã hóa
            'birthday' => fake()->date(), // Ngày sinh ngẫu nhiên
            'gender' => fake()->randomElement([0, 1]), // Giới tính: 0 (nữ), 1 (nam)
            'address' => fake()->address(), // Địa chỉ ngẫu nhiên
            'phone' => fake()->phoneNumber(), // Số điện thoại ngẫu nhiên
            'role' => fake()->randomElement(['customer', 'admin']), // Vai trò
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
