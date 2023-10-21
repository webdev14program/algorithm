<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'ADMINISTRATOR',
                'email' => 'admin@google.com',
                'role' => 'admin',
                'password' => bcrypt('admin123'),
            ]
        ];

        foreach ($userData as $data => $key) {
            User::created($key);
        }
    }
}
