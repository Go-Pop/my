<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'real_name' => $this->faker->name(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'face' => 'https://cdn.learnku.com/uploads/images/201710/14/1/NDnzMutoxX.png',
            'tel' => '13000000000',
            'card_id' => '2311333333333333',
            'email' => 'xxxvcv@163.com',
            'is_stock' => 1,
            'is_receptionist' => 1,
            'is_driver' => 1,
            'is_salesperson' => 1,
            'is_job' => 1,
            'status' => 1,
            'last_login_ip' => '110.11.12.222',
            'last_login_time' => now(),
            'last_login_area' => '中国.移动',
            'login_count' => 1,
        ];
    }
}
